<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\ApiException;
use Picqer\Financials\Exact\Connection;
use Psr\Http\Message\RequestInterface;

class AuthenticationTest extends TestCase
{
    private const TOKEN_URL = 'https://start.exactonline.nl/api/oauth2/token';

    /**
     * @var array<int, array{request: RequestInterface}>
     */
    private array $history = [];

    public function testAuthorizationCodeIsExchangedForTokens(): void
    {
        $connection = $this->createConnection([$this->tokenResponse(), $this->emptyResponse()]);
        $connection->setAuthorizationCode('authorization-code');

        $connection->get('crm/Accounts');

        $tokenRequest = $this->sentRequests()[0];
        $this->assertSame('POST', $tokenRequest->getMethod());
        $this->assertSame(self::TOKEN_URL, (string) $tokenRequest->getUri());
        $this->assertSame([
            'redirect_uri'  => 'https://example.com/callback',
            'grant_type'    => 'authorization_code',
            'client_id'     => 'client-id',
            'client_secret' => 'client-secret',
            'code'          => 'authorization-code',
        ], $this->formParams($tokenRequest));

        $this->assertSame('new-access-token', $connection->getAccessToken());
        $this->assertSame('new-refresh-token', $connection->getRefreshToken());
        $this->assertEqualsWithDelta(time() + 600, $connection->getTokenExpires(), 5);
        $this->assertSame('Bearer new-access-token', $this->sentRequests()[1]->getHeaderLine('Authorization'));
    }

    public function testRefreshTokenIsUsedWhenAccessTokenHasExpired(): void
    {
        $connection = $this->createConnection([$this->tokenResponse(), $this->emptyResponse()]);
        $connection->setAccessToken('old-access-token');
        $connection->setRefreshToken('old-refresh-token');
        $connection->setTokenExpires(time() - 1);

        $connection->get('crm/Accounts');

        $this->assertSame([
            'refresh_token' => 'old-refresh-token',
            'grant_type'    => 'refresh_token',
            'client_id'     => 'client-id',
            'client_secret' => 'client-secret',
        ], $this->formParams($this->sentRequests()[0]));
        $this->assertSame('Bearer new-access-token', $this->sentRequests()[1]->getHeaderLine('Authorization'));
    }

    public function testAccessTokenIsRefreshedShortlyBeforeItExpires(): void
    {
        $connection = $this->createConnection([$this->tokenResponse(), $this->emptyResponse()]);
        $connection->setAccessToken('old-access-token');
        $connection->setRefreshToken('old-refresh-token');
        $connection->setTokenExpires(time() + 5);

        $connection->get('crm/Accounts');

        $this->assertCount(2, $this->sentRequests());
        $this->assertSame(self::TOKEN_URL, (string) $this->sentRequests()[0]->getUri());
    }

    public function testValidAccessTokenIsReused(): void
    {
        $connection = $this->createConnection([$this->emptyResponse()]);
        $connection->setAccessToken('access-token');
        $connection->setRefreshToken('refresh-token');
        $connection->setTokenExpires(time() + 600);

        $connection->get('crm/Accounts');

        $this->assertCount(1, $this->sentRequests());
        $this->assertSame('Bearer access-token', $this->sentRequests()[0]->getHeaderLine('Authorization'));
    }

    public function testAccessTokenIsNotSentWithoutRefreshTokenOrAuthorizationCode(): void
    {
        // Documents current behaviour: an access token alone is not enough to sign requests.
        $connection = $this->createConnection([$this->emptyResponse()]);
        $connection->setAccessToken('access-token');
        $connection->setTokenExpires(time() + 600);

        $connection->get('crm/Accounts');

        $this->assertSame('', $this->sentRequests()[0]->getHeaderLine('Authorization'));
    }

    public function testCallbacksAreCalledAroundTokenRefresh(): void
    {
        $calls = [];
        $connection = $this->createConnection([$this->tokenResponse(), $this->emptyResponse()]);
        $connection->setRefreshToken('old-refresh-token');
        $connection->setAcquireAccessTokenLockCallback(function (Connection $connection) use (&$calls) {
            $calls[] = 'lock';
        });
        $connection->setRefreshAccessTokenCallback(function (Connection $connection) use (&$calls) {
            $calls[] = 'refresh';
        });
        $connection->setTokenUpdateCallback(function (Connection $connection) use (&$calls) {
            $calls[] = 'update:' . $connection->getRefreshToken();
        });
        $connection->setAcquireAccessTokenUnlockCallback(function (Connection $connection) use (&$calls) {
            $calls[] = 'unlock';
        });

        $connection->get('crm/Accounts');

        $this->assertSame(['lock', 'refresh', 'update:new-refresh-token', 'unlock'], $calls);
    }

    public function testRefreshAccessTokenCallbackCanProvideValidTokenFromAnotherProcess(): void
    {
        $connection = $this->createConnection([$this->emptyResponse()]);
        $connection->setRefreshToken('old-refresh-token');
        $connection->setRefreshAccessTokenCallback(function (Connection $connection) {
            // e.g. another process refreshed the tokens in the meantime
            $connection->setAccessToken('stored-access-token');
            $connection->setRefreshToken('stored-refresh-token');
            $connection->setTokenExpires(time() + 600);
        });

        $connection->get('crm/Accounts');

        $this->assertCount(1, $this->sentRequests());
        $this->assertSame('Bearer stored-access-token', $this->sentRequests()[0]->getHeaderLine('Authorization'));
    }

    public function testUnlockCallbackIsCalledWhenTokenRequestFails(): void
    {
        $unlocked = false;
        $connection = $this->createConnection([new Response(400, [], json_encode(['error' => 'invalid_grant']))]);
        $connection->setRefreshToken('revoked-refresh-token');
        $connection->setAcquireAccessTokenUnlockCallback(function () use (&$unlocked) {
            $unlocked = true;
        });

        try {
            $connection->get('crm/Accounts');
            $this->fail('Expected an ApiException');
        } catch (ApiException $e) {
            $this->assertSame(400, $e->getCode());
        }

        $this->assertTrue($unlocked);
    }

    public function testTokenUpdateCallbackIsNotCalledWhenTokenRequestFails(): void
    {
        $updated = false;
        $connection = $this->createConnection([new Response(400, [], json_encode(['error' => 'invalid_grant']))]);
        $connection->setRefreshToken('revoked-refresh-token');
        $connection->setTokenUpdateCallback(function () use (&$updated) {
            $updated = true;
        });

        try {
            $connection->get('crm/Accounts');
        } catch (ApiException $e) {
        }

        $this->assertFalse($updated);
        $this->assertSame('revoked-refresh-token', $connection->getRefreshToken());
    }

    public function testNeedsAuthenticationWithoutRefreshTokenOrAuthorizationCode(): void
    {
        $connection = new Connection();
        $this->assertTrue($connection->needsAuthentication());

        $connection->setAuthorizationCode('authorization-code');
        $this->assertFalse($connection->needsAuthentication());

        $connection = new Connection();
        $connection->setRefreshToken('refresh-token');
        $this->assertFalse($connection->needsAuthentication());
    }

    public function testAuthUrl(): void
    {
        $connection = new Connection();
        $connection->setExactClientId('client-id');
        $connection->setRedirectUrl('https://example.com/callback');
        $connection->setState('random-state');
        $connection->setForceLogin(true);

        $url = $connection->getAuthUrl();

        $this->assertStringStartsWith('https://start.exactonline.nl/api/oauth2/auth?', $url);
        parse_str((string) parse_url($url, PHP_URL_QUERY), $query);
        $this->assertSame([
            'client_id'     => 'client-id',
            'redirect_uri'  => 'https://example.com/callback',
            'response_type' => 'code',
            'state'         => 'random-state',
            'force_login'   => '1',
        ], $query);
    }

    public function testBaseUrlIsUsedForTokenAndApiRequests(): void
    {
        $connection = $this->createConnection([$this->tokenResponse(), $this->emptyResponse()]);
        $connection->setBaseUrl('https://start.exactonline.de');
        $connection->setRefreshToken('refresh-token');

        $connection->get('crm/Accounts');

        $this->assertSame('https://start.exactonline.de/api/oauth2/token', (string) $this->sentRequests()[0]->getUri());
        $this->assertSame('https://start.exactonline.de/api/v1/1234567890/crm/Accounts', (string) $this->sentRequests()[1]->getUri());
    }

    /**
     * @param Response[] $responses
     */
    private function createConnection(array $responses): Connection
    {
        $handlerStack = HandlerStack::create(new MockHandler($responses));
        $handlerStack->push(Middleware::history($this->history));

        $connection = new Connection();
        $connection->setClient(new Client(['handler' => $handlerStack]));
        $connection->setExactClientId('client-id');
        $connection->setExactClientSecret('client-secret');
        $connection->setRedirectUrl('https://example.com/callback');
        $connection->setDivision(1234567890);

        return $connection;
    }

    private function tokenResponse(): Response
    {
        return new Response(200, [], json_encode([
            'access_token'  => 'new-access-token',
            'token_type'    => 'bearer',
            'expires_in'    => '600',
            'refresh_token' => 'new-refresh-token',
        ]));
    }

    private function emptyResponse(): Response
    {
        return new Response(200, [], json_encode(['d' => ['results' => []]]));
    }

    /**
     * @return RequestInterface[]
     */
    private function sentRequests(): array
    {
        return array_column($this->history, 'request');
    }

    /**
     * @return array<string, string>
     */
    private function formParams(RequestInterface $request): array
    {
        parse_str((string) $request->getBody(), $params);

        return $params;
    }
}

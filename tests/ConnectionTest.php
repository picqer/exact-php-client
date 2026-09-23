<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\ApiException;
use Picqer\Financials\Exact\Connection;

class ConnectionTest extends TestCase
{
    /**
     * @dataProvider endpointsThatDontUseDivisionInUrl
     */
    public function testGetDoesntIncludeDivisionInUrlForSomeEndpoints(string $endpointUrl): void
    {
        $divisionNumber = random_int(0, PHP_INT_MAX);
        $mockHandler = $this->createMockHandler();
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new Client(['handler' => $handlerStack]);
        $connection = new Connection();
        $connection->setClient($client);
        $connection->setDivision($divisionNumber);
        $connection->setAccessToken('1234567890');
        $connection->setTokenExpires(time() + 60);

        $connection->get($endpointUrl);

        $this->assertStringNotContainsString((string) $divisionNumber, $mockHandler->getLastRequest()->getUri()->__toString());
    }

    public function testGetIncludesDivisionInUrlForRegularEndpoint(): void
    {
        $divisionNumber = random_int(0, PHP_INT_MAX);
        $mockHandler = $this->createMockHandler();
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new Client(['handler' => $handlerStack]);
        $connection = new Connection();
        $connection->setClient($client);
        $connection->setDivision($divisionNumber);
        $connection->setAccessToken('1234567890');
        $connection->setTokenExpires(time() + 60);

        $connection->get('crm/Accounts');

        $this->assertStringContainsString((string) $divisionNumber, $mockHandler->getLastRequest()->getUri()->__toString());
    }

    public function testResponseIsLoggedIfResponseIsNotValidJson(): void
    {
        $divisionNumber = random_int(0, PHP_INT_MAX);
        $mockHandler = new MockHandler([
            new Response(200, [], 'invalid json'),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new Client(['handler' => $handlerStack]);
        $connection = new Connection();
        $connection->setClient($client);
        $connection->setDivision($divisionNumber);
        $connection->setAccessToken('1234567890');
        $connection->setTokenExpires(time() + 60);

        $this->expectException(ApiException::class);
        $this->expectExceptionMessage('Json decode failed. Got response: invalid json');

        $connection->get('crm/Accounts');
    }

    public function testResponseIsLoggedIfAcquiringTokensFailed(): void
    {
        $divisionNumber = random_int(0, PHP_INT_MAX);
        $mockHandler = new MockHandler([
            new Response(200, [], 'invalid json'),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new Client(['handler' => $handlerStack]);
        $connection = new Connection();
        $connection->setClient($client);
        $connection->setDivision($divisionNumber);

        $this->expectException(ApiException::class);
        $this->expectExceptionMessage('Could not acquire tokens, json decode failed. Got response: invalid json');

        $connection->get('crm/Accounts');
    }

    public function testTokenExpiresCanBeSetAsNumericString(): void
    {
        $expires = time() + 600;
        $connection = new Connection();

        $connection->setTokenExpires((string) $expires);

        $this->assertSame($expires, $connection->getTokenExpires());
    }

    public function testTokenExpiresIsZeroWhenNotSet(): void
    {
        $this->assertSame(0, (new Connection())->getTokenExpires());
    }

    /**
     * @dataProvider expiresInValues
     *
     * @param int|string $expiresIn
     */
    public function testTokenExpiresIsSetFromTokenResponse($expiresIn): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode(['access_token' => 'access', 'refresh_token' => 'refresh', 'expires_in' => $expiresIn])),
            new Response(200, [], json_encode((object) [])),
        ]);
        $connection = new Connection();
        $connection->setClient(new Client(['handler' => HandlerStack::create($mockHandler)]));
        $connection->setDivision(1234567890);
        $connection->setRefreshToken('refresh');

        $connection->get('crm/Accounts');

        $this->assertEqualsWithDelta(time() + 600, $connection->getTokenExpires(), 5);
    }

    public function expiresInValues(): \Generator
    {
        yield 'string' => ['600'];
        yield 'integer' => [600];
    }

    public function testApiExceptionKeepsStatusCodeWhenAcquiringTokensFails(): void
    {
        $mockHandler = new MockHandler([
            new Response(400, [], json_encode(['error' => 'invalid_grant'])),
        ]);
        $connection = new Connection();
        $connection->setClient(new Client(['handler' => HandlerStack::create($mockHandler)]));
        $connection->setDivision(1234567890);
        $connection->setRefreshToken('expired-refresh-token');

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Error 400: {"error":"invalid_grant"}');

        $connection->get('crm/Accounts');
    }

    public function testDivisionPlaceholderInUrlIsReplacedForBetaEndpoints(): void
    {
        $mockHandler = $this->createMockHandler();
        $connection = new Connection();
        $connection->setClient(new Client(['handler' => HandlerStack::create($mockHandler)]));
        $connection->setDivision(1234567890);
        $connection->setAccessToken('1234567890');
        $connection->setTokenExpires(time() + 60);

        $connection->get('beta/{division}/budget/BudgetScenarios');

        $this->assertSame(
            'https://start.exactonline.nl/api/v1/beta/1234567890/budget/BudgetScenarios',
            (string) $mockHandler->getLastRequest()->getUri()
        );
    }

    public function testAbsoluteUrlIsNotPrefixed(): void
    {
        $url = 'https://start.exactonline.nl/api/v1/1234567890/crm/Accounts?$skiptoken=1';
        $mockHandler = $this->createMockHandler();
        $connection = new Connection();
        $connection->setClient(new Client(['handler' => HandlerStack::create($mockHandler)]));
        $connection->setDivision(1234567890);
        $connection->setAccessToken('1234567890');
        $connection->setTokenExpires(time() + 60);

        $connection->get($url);

        $this->assertSame($url, urldecode((string) $mockHandler->getLastRequest()->getUri()));
    }

    public function endpointsThatDontUseDivisionInUrl(): \Generator
    {
        yield 'System users endpoint' => ['system/Users'];
        yield 'Me endpoint'           => ['current/Me'];
    }

    private function createMockHandler(): MockHandler
    {
        return new MockHandler([
            new Response(200, [], json_encode((object) [])),
        ]);
    }
}

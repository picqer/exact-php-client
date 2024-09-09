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

    public function endpointsThatDontUseDivisionInUrl(): array
    {
        return [
            'System users endpoint' => ['system/Users'],
            'Me endpoint'           => ['current/Me'],
        ];
    }

    private function createMockHandler(): MockHandler
    {
        return new MockHandler([
            new Response(200, [], json_encode((object) [])),
        ]);
    }
}

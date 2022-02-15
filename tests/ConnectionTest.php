<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
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

<?php

namespace Picqer\Tests\Support;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Picqer\Financials\Exact\Connection;
use Psr\Http\Message\RequestInterface;

trait MocksExactConnection
{
    /**
     * @var array<int, array{request: RequestInterface}>
     */
    protected array $requestHistory = [];

    protected function createMockConnection(callable $mockHandler): Connection
    {
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($this->requestHistory));
        $client = new Client(['handler' => $handlerStack]);
        $connection = new Connection();
        $connection->setClient($client);
        $connection->setDivision('1234567890');
        $connection->setAccessToken('1234567890');
        $connection->setTokenExpires(time() + 60);

        return $connection;
    }

    /**
     * @param \GuzzleHttp\Psr7\Response|array|string|null $response
     *
     * @return MockHandler
     */
    protected function createMockHandler($response = null): MockHandler
    {
        return new MockHandler(
            $this->normalizeResponse($response)
        );
    }

    protected function createMockHandlerUsingFixture(string $fixture): MockHandler
    {
        return $this->createMockHandler(
            file_get_contents(__DIR__ . "/../fixtures/$fixture")
        );
    }

    /**
     * @return RequestInterface[]
     */
    protected function sentRequests(): array
    {
        return array_column($this->requestHistory, 'request');
    }

    protected function normalizeResponse($response = null): array
    {
        if (is_array($response)) {
            return $response;
        }

        if (is_string($response)) {
            return [new Response(200, [], $response)];
        }

        if ($response instanceof Response) {
            return [$response];
        }

        return [];
    }
}

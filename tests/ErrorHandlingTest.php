<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\ApiException;
use Picqer\Tests\Support\MocksExactConnection;

class ErrorHandlingTest extends TestCase
{
    use MocksExactConnection;

    public function testExactErrorMessageIsUsed(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(400, [], json_encode(['error' => ['code' => '', 'message' => ['lang' => '', 'value' => 'Mandatory: Name']]])),
        ]));

        try {
            $connection->post('crm/Accounts', '{}');
            $this->fail('Expected an ApiException');
        } catch (ApiException $e) {
            $this->assertSame('Error 400: Mandatory: Name', $e->getMessage());
            $this->assertSame(400, $e->getCode());
            $this->assertInstanceOf(BadResponseException::class, $e->getPrevious());
        }
    }

    public function testRawBodyIsUsedWhenErrorIsNotInExactFormat(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(500, [], 'Internal Server Error'),
        ]));

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(500);
        $this->expectExceptionMessage('Error 500: Internal Server Error');

        $connection->get('crm/Accounts');
    }

    public function testReasonHeaderIsAddedToMessage(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(401, ['Reason' => 'Access token is invalid'], ''),
        ]));

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(401);
        $this->expectExceptionMessage('Error 401:  (Reason: Access token is invalid)');

        $connection->get('crm/Accounts');
    }

    /**
     * @dataProvider methods
     */
    public function testErrorsAreThrownForEveryMethod(string $method): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(404, [], json_encode(['error' => ['message' => ['value' => 'Not found']]])),
        ]));

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(404);

        switch ($method) {
            case 'GET':
                $connection->get('crm/Accounts');
                break;
            case 'POST':
                $connection->post('crm/Accounts', '{}');
                break;
            case 'PUT':
                $connection->put("crm/Accounts(guid'00000000-0000-0000-0000-000000000000')", '{}');
                break;
            case 'DELETE':
                $connection->delete("crm/Accounts(guid'00000000-0000-0000-0000-000000000000')");
                break;
        }
    }

    public function methods(): \Generator
    {
        yield 'GET' => ['GET'];
        yield 'POST' => ['POST'];
        yield 'PUT' => ['PUT'];
        yield 'DELETE' => ['DELETE'];
    }

    public function testConnectionErrorsAreWrapped(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new ConnectException('Could not resolve host', new Request('GET', 'https://start.exactonline.nl')),
        ]));

        try {
            $connection->get('crm/Accounts');
            $this->fail('Expected an ApiException');
        } catch (ApiException $e) {
            $this->assertSame('Could not resolve host', $e->getMessage());
            $this->assertSame(0, $e->getCode());
            $this->assertInstanceOf(ConnectException::class, $e->getPrevious());
        }
    }

    public function testTooManyRequestsHasStatusCodeAndUpdatesRateLimits(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(429, [
                'X-RateLimit-Minutely-Limit'     => '60',
                'X-RateLimit-Minutely-Remaining' => '0',
                'X-RateLimit-Minutely-Reset'     => '1700000060000',
            ], json_encode(['error' => ['message' => ['value' => 'Too many requests']]])),
        ]));

        try {
            $connection->get('crm/Accounts');
            $this->fail('Expected an ApiException');
        } catch (ApiException $e) {
            $this->assertSame(429, $e->getCode());
        }

        $this->assertSame(60, $connection->getMinutelyLimit());
        $this->assertSame(0, $connection->getMinutelyLimitRemaining());
        $this->assertSame(1700000060000, $connection->getMinutelyLimitReset());
    }
}

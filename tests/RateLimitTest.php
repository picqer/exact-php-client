<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Tests\Support\MocksExactConnection;

class RateLimitTest extends TestCase
{
    use MocksExactConnection;

    public function testRateLimitsAreNullBeforeFirstRequest(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler());

        $this->assertNull($connection->getDailyLimit());
        $this->assertNull($connection->getDailyLimitRemaining());
        $this->assertNull($connection->getDailyLimitReset());
        $this->assertNull($connection->getMinutelyLimit());
        $this->assertNull($connection->getMinutelyLimitRemaining());
        $this->assertNull($connection->getMinutelyLimitReset());
    }

    public function testRateLimitsAreReadFromResponseHeaders(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [
                'X-RateLimit-Limit'              => '5000',
                'X-RateLimit-Remaining'          => '4999',
                'X-RateLimit-Reset'              => '1700086400000',
                'X-RateLimit-Minutely-Limit'     => '60',
                'X-RateLimit-Minutely-Remaining' => '59',
                'X-RateLimit-Minutely-Reset'     => '1700000060000',
            ], json_encode(['d' => ['results' => []]])),
        ]));

        $connection->get('crm/Accounts');

        $this->assertSame(5000, $connection->getDailyLimit());
        $this->assertSame(4999, $connection->getDailyLimitRemaining());
        $this->assertSame(1700086400000, $connection->getDailyLimitReset());
        $this->assertSame(60, $connection->getMinutelyLimit());
        $this->assertSame(59, $connection->getMinutelyLimitRemaining());
        $this->assertSame(1700000060000, $connection->getMinutelyLimitReset());
    }

    public function testMissingHeadersResultInZero(): void
    {
        // Documents current behaviour: when Exact only sends the minutely headers, the daily limits become 0
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, ['X-RateLimit-Minutely-Remaining' => '10'], json_encode(['d' => ['results' => []]])),
        ]));

        $connection->get('crm/Accounts');

        $this->assertSame(0, $connection->getDailyLimitRemaining());
        $this->assertSame(10, $connection->getMinutelyLimitRemaining());
    }

    public function testDoesNotWaitWhenMinutelyResetHasPassed(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [
                'X-RateLimit-Minutely-Remaining' => '0',
                'X-RateLimit-Minutely-Reset'     => (string) ((time() - 60) * 1000),
            ], json_encode(['d' => ['results' => []]])),
            new Response(200, [], json_encode(['d' => ['results' => []]])),
        ]));
        $connection->setWaitOnMinutelyRateLimitHit(true);
        $connection->get('crm/Accounts');

        $start = microtime(true);
        $connection->get('crm/Accounts');

        $this->assertLessThan(1.5, microtime(true) - $start);
        $this->assertCount(2, $this->sentRequests());
    }
}

<?php

declare(strict_types=1);

namespace Picqer\Tests;

use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Webhook\Authenticatable;

class WebhookTest extends TestCase
{
    private const SECRET = 'webhook-secret';

    private const CONTENT = '{"Topic":"Items","ClientId":"00000000-0000-0000-0000-000000000000","Division":1234567890,"Action":"Update","Key":"00000000-0000-0000-0000-000000000001"}';

    public function testAuthenticatesValidRequest(): void
    {
        $hashCode = strtoupper(hash_hmac('sha256', self::CONTENT, self::SECRET));

        $this->assertTrue($this->webhook()->authenticate($this->request($hashCode), self::SECRET));
    }

    public function testRejectsInvalidHashCode(): void
    {
        $hashCode = strtoupper(hash_hmac('sha256', self::CONTENT, 'other-secret'));

        $this->assertFalse($this->webhook()->authenticate($this->request($hashCode), self::SECRET));
    }

    public function testRejectsMalformedRequest(): void
    {
        $this->assertFalse($this->webhook()->authenticate('{"Content":{}}', self::SECRET));
    }

    private function request(string $hashCode): string
    {
        return '{"Content":' . self::CONTENT . ',"HashCode":"' . $hashCode . '"}';
    }

    private function webhook(): object
    {
        return new class() {
            use Authenticatable;
        };
    }
}

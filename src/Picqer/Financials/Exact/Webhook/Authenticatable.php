<?php

declare(strict_types=1);

namespace Picqer\Financials\Exact\Webhook;

trait Authenticatable
{
    public function authenticate(string $requestContent, string $webhookSecret): bool
    {
        $matches = [];
        $matched = preg_match('/^{"Content":(.*),"HashCode":"(.*)"}$/', $requestContent, $matches);

        if ($matched === 1) {
            return hash_equals(strtoupper(hash_hmac('sha256', $matches[1], $webhookSecret)), $matches[2]);
        }

        return false;
    }
}

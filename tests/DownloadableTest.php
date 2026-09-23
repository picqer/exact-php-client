<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\ApiException;
use Picqer\Financials\Exact\DocumentAttachment;
use Picqer\Financials\Exact\Item;
use Picqer\Tests\Support\MocksExactConnection;

class DownloadableTest extends TestCase
{
    use MocksExactConnection;

    private const PICTURE_URL = 'https://start.exactonline.nl/docs/SysImage.aspx?Table=Items&ID=00000000-0000-0000-0000-000000000001';

    public function testDownloadUsesConnection(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, ['X-RateLimit-Minutely-Remaining' => '58'], 'binary-image-data'),
        ]));
        $connection->setRefreshToken('refresh-token');

        $stream = (new Item($connection, ['PictureUrl' => self::PICTURE_URL]))->download();

        $this->assertSame('binary-image-data', (string) $stream);
        $request = $this->sentRequests()[0];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::PICTURE_URL, (string) $request->getUri());
        $this->assertSame('Bearer 1234567890', $request->getHeaderLine('Authorization'));
        $this->assertSame(58, $connection->getMinutelyLimitRemaining());
    }

    public function testDownloadAppendsDownloadParameterForDocumentAttachments(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([new Response(200, [], 'pdf-data')]));
        $url = 'https://start.exactonline.nl/docs/SysAttachment.aspx?ID=00000000-0000-0000-0000-000000000001';

        (new DocumentAttachment($connection, ['Url' => $url]))->download();

        $this->assertSame($url . '&Download=1', (string) $this->sentRequests()[0]->getUri());
    }

    public function testDownloadRefreshesExpiredAccessToken(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode([
                'access_token'  => 'new-access-token',
                'refresh_token' => 'new-refresh-token',
                'expires_in'    => '600',
            ])),
            new Response(200, [], 'binary-image-data'),
        ]));
        $connection->setRefreshToken('refresh-token');
        $connection->setTokenExpires(time() - 1);

        (new Item($connection, ['PictureUrl' => self::PICTURE_URL]))->download();

        $this->assertSame('Bearer new-access-token', $this->sentRequests()[1]->getHeaderLine('Authorization'));
    }

    public function testDownloadErrorsAreApiExceptions(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([new Response(404, [], 'Not found')]));

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('Error 404: Not found');

        (new Item($connection, ['PictureUrl' => self::PICTURE_URL]))->download();
    }
}

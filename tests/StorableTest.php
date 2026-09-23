<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Account;
use Picqer\Financials\Exact\SalesInvoice;
use Picqer\Financials\Exact\SalesInvoiceLine;
use Picqer\Tests\Support\MocksExactConnection;

class StorableTest extends TestCase
{
    use MocksExactConnection;

    private const ID = '00000000-0000-0000-0000-000000000001';

    public function testSaveInsertsNewModelAndFillsItFromTheResponse(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(201, [], json_encode(['d' => ['ID' => self::ID, 'Code' => '1', 'Name' => 'Picqer']])),
        ]));
        $account = new Account($connection, ['Code' => '1', 'Name' => 'Picqer']);

        $account->save();

        $request = $this->sentRequests()[0];
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame('https://start.exactonline.nl/api/v1/1234567890/crm/Accounts', (string) $request->getUri());
        $this->assertSame(['Code' => '1', 'Name' => 'Picqer'], json_decode((string) $request->getBody(), true));
        $this->assertSame(self::ID, $account->ID);
        $this->assertTrue($account->exists());
    }

    public function testSaveUpdatesExistingModel(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([new Response(204)]));
        $account = new Account($connection, ['ID' => self::ID, 'Name' => 'Picqer']);

        $account->save();

        $request = $this->sentRequests()[0];
        $this->assertSame('PUT', $request->getMethod());
        $this->assertSame(
            "https://start.exactonline.nl/api/v1/1234567890/crm/Accounts(guid'" . self::ID . "')",
            urldecode((string) $request->getUri())
        );
        $this->assertSame(['ID' => self::ID, 'Name' => 'Picqer'], json_decode((string) $request->getBody(), true));
        $this->assertSame('Picqer', $account->Name);
    }

    public function testDeleteUsesPrimaryKeyInUrl(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([new Response(204)]));

        $result = (new Account($connection, ['ID' => self::ID]))->delete();

        $request = $this->sentRequests()[0];
        $this->assertSame('DELETE', $request->getMethod());
        $this->assertSame(
            "https://start.exactonline.nl/api/v1/1234567890/crm/Accounts(guid'" . self::ID . "')",
            urldecode((string) $request->getUri())
        );
        $this->assertSame([], $result);
    }

    public function testUpdateUsesCustomPrimaryKey(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([new Response(204)]));

        (new SalesInvoice($connection, ['InvoiceID' => self::ID, 'Description' => 'Invoice']))->save();

        $this->assertSame(
            "https://start.exactonline.nl/api/v1/1234567890/salesinvoice/SalesInvoices(guid'" . self::ID . "')",
            urldecode((string) $this->sentRequests()[0]->getUri())
        );
    }

    public function testInsertSendsLinesInTheSameRequest(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(201, [], json_encode(['d' => ['InvoiceID' => self::ID]])),
        ]));
        $invoice = new SalesInvoice($connection);
        $invoice->OrderedBy = self::ID;
        $invoice->SalesInvoiceLines = [
            new SalesInvoiceLine($connection, ['Item' => self::ID, 'Quantity' => 1]),
            new SalesInvoiceLine($connection, ['Item' => self::ID, 'Quantity' => 2]),
        ];

        $invoice->save();

        $this->assertSame([
            'OrderedBy'         => self::ID,
            'SalesInvoiceLines' => [
                ['Item' => self::ID, 'Quantity' => 1],
                ['Item' => self::ID, 'Quantity' => 2],
            ],
        ], json_decode((string) $this->sentRequests()[0]->getBody(), true));
        $this->assertSame(self::ID, $invoice->InvoiceID);
    }

    public function testUpdateDoesNotSendLines(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([new Response(204)]));
        $invoice = new SalesInvoice($connection, ['InvoiceID' => self::ID]);
        $invoice->SalesInvoiceLines = [new SalesInvoiceLine($connection, ['Item' => self::ID, 'Quantity' => 1])];

        $invoice->save();

        $this->assertSame(['InvoiceID' => self::ID], json_decode((string) $this->sentRequests()[0]->getBody(), true));
    }

    public function testNonFillableAttributesAreNotSent(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(201, [], json_encode(['d' => ['ID' => self::ID]])),
        ]));
        $account = new Account($connection, ['Name' => 'Picqer', 'NotAnExactField' => 'x']);

        $account->save();

        $this->assertSame(['Name' => 'Picqer'], json_decode((string) $this->sentRequests()[0]->getBody(), true));
    }

    public function testRequestsAreSentAsAuthenticatedJson(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(201, [], json_encode(['d' => ['ID' => self::ID]])),
        ]));
        $connection->setRefreshToken('refresh-token');

        (new Account($connection, ['Name' => 'Picqer']))->save();

        $request = $this->sentRequests()[0];
        $this->assertSame('Bearer 1234567890', $request->getHeaderLine('Authorization'));
        $this->assertSame('application/json', $request->getHeaderLine('Content-Type'));
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('return=representation', $request->getHeaderLine('Prefer'));
    }
}

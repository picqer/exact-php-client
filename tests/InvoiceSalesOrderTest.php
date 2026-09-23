<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\InvoiceSalesOrder;
use Picqer\Financials\Exact\InvoiceSalesOrderResult;
use Picqer\Financials\Exact\SalesOrderID;
use Picqer\Tests\Support\MocksExactConnection;

class InvoiceSalesOrderTest extends TestCase
{
    use MocksExactConnection;

    private const SALES_ORDER_ID = '00000000-0000-0000-0000-000000000001';

    private const PROCESS_ID = '00000000-0000-0000-0000-000000000002';

    public function testInvoiceSalesOrdersAsync(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(201, [], json_encode(['d' => [
                'ID'        => '00000000-0000-0000-0000-000000000003',
                'Mode'      => 1,
                'ProcessID' => self::PROCESS_ID,
            ]])),
        ]));
        $invoiceSalesOrder = new InvoiceSalesOrder($connection);
        $invoiceSalesOrder->CreateMode = 1;
        $invoiceSalesOrder->InvoiceMode = 0;
        $invoiceSalesOrder->JournalCode = '70';
        $invoiceSalesOrder->Mode = 1;
        $invoiceSalesOrder->SalesOrderIDs = [new SalesOrderID($connection, ['ID' => self::SALES_ORDER_ID])];

        $invoiceSalesOrder->save();

        $request = $this->sentRequests()[0];
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame('https://start.exactonline.nl/api/v1/1234567890/salesinvoice/InvoiceSalesOrders', (string) $request->getUri());
        $this->assertSame([
            'CreateMode'    => 1,
            'InvoiceMode'   => 0,
            'JournalCode'   => '70',
            'Mode'          => 1,
            'SalesOrderIDs' => [['ID' => self::SALES_ORDER_ID]],
        ], json_decode((string) $request->getBody(), true));
        $this->assertSame(self::PROCESS_ID, $invoiceSalesOrder->ProcessID);
    }

    public function testGetResultOfAsyncProcess(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => [[
                'ProcessID'               => self::PROCESS_ID,
                'Errors'                  => '',
                'NumberOfCreatedInvoices' => 1,
                'NumberOfFailedInvoices'  => 0,
                'Status'                  => 'Processed',
            ]]]])),
        ]));

        $results = (new InvoiceSalesOrderResult($connection))->get(['ProcessID' => "guid'" . self::PROCESS_ID . "'"]);

        $this->assertSame(
            "https://start.exactonline.nl/api/v1/1234567890/read/salesinvoice/InvoiceSalesOrderResult?ProcessID=guid'" . self::PROCESS_ID . "'",
            urldecode((string) $this->sentRequests()[0]->getUri())
        );
        $this->assertCount(1, $results);
        $this->assertSame('Processed', $results[0]->Status);
        $this->assertSame(1, $results[0]->NumberOfCreatedInvoices);
        $this->assertSame(self::PROCESS_ID, $results[0]->primaryKeyContent());
    }
}

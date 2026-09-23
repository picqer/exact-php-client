<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Account;
use Picqer\Financials\Exact\Item;
use Picqer\Financials\Exact\SalesInvoice;
use Picqer\Financials\Exact\SalesInvoiceLine;
use Picqer\Tests\Support\MocksExactConnection;

class FindableTest extends TestCase
{
    use MocksExactConnection;

    private const ID = '00000000-0000-0000-0000-000000000001';

    public function testFindFiltersOnPrimaryKey(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => [['ID' => self::ID, 'Code' => 'ITEM']]])),
        ]));

        $item = (new Item($connection))->find(self::ID);

        $this->assertSame([
            '$filter' => "ID eq guid'" . self::ID . "'",
            '$top'    => '1',
        ], $this->query());
        $this->assertSame('ITEM', $item->Code);
    }

    public function testFindReturnsEmptyModelWhenNothingFound(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => []])),
        ]));

        $item = (new Item($connection))->find(self::ID);

        $this->assertInstanceOf(Item::class, $item);
        $this->assertFalse($item->exists());
    }

    public function testFindWithSelect(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => [['ID' => self::ID, 'Code' => 'ITEM']]]])),
        ]));

        $item = (new Item($connection))->findWithSelect(self::ID, 'ID,Code');

        $this->assertSame([
            '$filter' => "ID eq guid'" . self::ID . "'",
            '$select' => 'ID,Code',
        ], $this->query());
        $this->assertSame('ITEM', $item->Code);
    }

    /**
     * @dataProvider findIdFilters
     *
     * @param int|string $code
     */
    public function testFindIdFilterFormat(string $class, $code, string $key, string $expectedFilter): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => [['ID' => self::ID]]])),
        ]));

        $id = (new $class($connection))->findId($code, $key);

        $this->assertSame(self::ID, $id);
        $this->assertSame([
            '$filter'  => $expectedFilter,
            '$top'     => '1',
            '$select'  => 'ID',
            '$orderby' => 'ID',
        ], $this->query());
    }

    public function findIdFilters(): \Generator
    {
        yield 'string code' => [Item::class, 'ITEM-1', 'Code', "Code eq 'ITEM-1'"];
        yield 'integer code' => [Item::class, 123, 'Code', 'Code eq 123'];
        yield 'guid' => [Item::class, self::ID, 'ID', "ID eq guid'" . self::ID . "'"];
        yield 'account code is padded to 18 characters' => [Account::class, '123', 'Code', "Code eq '               123'"];
    }

    public function testFindIdReturnsNullWhenNothingFound(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => []])),
        ]));

        $this->assertNull((new Item($connection))->findId('UNKNOWN'));
    }

    public function testFindIdDoesNotRequestNonFillableKey(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler());

        $this->assertNull((new Item($connection))->findId('x', 'NotAnExactField'));
        $this->assertCount(0, $this->sentRequests());
    }

    public function testFirstAlwaysRequestsOneRecord(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => [['ID' => self::ID]]])),
        ]));

        $item = (new Item($connection))->first("Code eq 'ITEM'", '', 'ID', ['$top' => 100, '$orderby' => 'Code']);

        $this->assertSame([
            '$top'     => '1',
            '$orderby' => 'Code',
            '$filter'  => "Code eq 'ITEM'",
            '$select'  => 'ID',
        ], $this->query());
        $this->assertSame(self::ID, $item->ID);
    }

    public function testFirstReturnsNullWhenNothingFound(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => []]])),
        ]));

        $this->assertNull((new Item($connection))->first());
    }

    public function testFilterWithSingleResultReturnsCollection(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => [['ID' => self::ID]]]])),
        ]));

        $items = (new Item($connection))->filter("Code eq 'ITEM'");

        $this->assertCount(1, $items);
        $this->assertSame(self::ID, $items[0]->ID);
    }

    public function testFilterOnDivisionUsesThatDivisionAndRestoresIt(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => []]])),
        ]));

        (new Item($connection))->filter('Division eq 999');

        $this->assertStringStartsWith(
            'https://start.exactonline.nl/api/v1/999/logistics/Items',
            (string) $this->sentRequests()[0]->getUri()
        );
        $this->assertSame('1234567890', $connection->getDivision());
    }

    public function testFilterSendsCustomHeaders(): void
    {
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => []]])),
        ]));

        (new Item($connection))->filter('', '', '', null, ['CustomDescriptionLanguage' => 'NL']);

        $this->assertSame('NL', $this->sentRequests()[0]->getHeaderLine('CustomDescriptionLanguage'));
    }

    public function testDeferredPropertyIsLazyLoaded(): void
    {
        $linesUri = "https://start.exactonline.nl/api/v1/1234567890/salesinvoice/SalesInvoices(guid'" . self::ID . "')/SalesInvoiceLines";
        $connection = $this->createMockConnection($this->createMockHandler([
            new Response(200, [], json_encode(['d' => ['results' => [
                ['ID' => '00000000-0000-0000-0000-000000000002', 'Quantity' => 1],
                ['ID' => '00000000-0000-0000-0000-000000000003', 'Quantity' => 2],
            ]]])),
        ]));
        $invoice = new SalesInvoice($connection, [
            'InvoiceID'         => self::ID,
            'SalesInvoiceLines' => ['__deferred' => ['uri' => $linesUri]],
        ]);

        $lines = $invoice->SalesInvoiceLines;

        $this->assertCount(2, $lines);
        $this->assertInstanceOf(SalesInvoiceLine::class, $lines[0]);
        $this->assertSame(2, $lines[1]->Quantity);
        $this->assertSame($linesUri, urldecode((string) $this->sentRequests()[0]->getUri()));

        // Loaded only once
        $this->assertCount(2, $invoice->SalesInvoiceLines);
        $this->assertCount(1, $this->sentRequests());
    }

    /**
     * @return array<string, string>
     */
    private function query(int $request = 0): array
    {
        parse_str($this->sentRequests()[$request]->getUri()->getQuery(), $query);

        return $query;
    }
}

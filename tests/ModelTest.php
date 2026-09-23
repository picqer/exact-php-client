<?php

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Account;
use Picqer\Financials\Exact\Item;
use Picqer\Financials\Exact\Query\Resultset;
use Picqer\Tests\Support\MocksExactConnection;

class ModelTest extends TestCase
{
    use MocksExactConnection;

    public function testCanFindModel(): void
    {
        $handler = $this->createMockHandlerUsingFixture('item.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->find('00000000-0000-0000-0000-000000000000');

        $this->assertInstanceOf(Item::class, $response);
        $this->assertEquals('00000000-0000-0000-0000-000000000000', $response->primaryKeyContent());
    }

    public function testCanGetFirstModel(): void
    {
        $handler = $this->createMockHandlerUsingFixture('item.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->first();

        $this->assertInstanceOf(Item::class, $response);
        $this->assertEquals('00000000-0000-0000-0000-000000000000', $response->primaryKeyContent());
    }

    public function testCanGetModels(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->get();

        $this->assertInstanceOf(Item::class, $response[0]);
        $this->assertCount(2, $response);
    }

    public function testCanGetModelsAsGenerator(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->getAsGenerator();

        $this->assertEquals(2, iterator_count($response));
    }

    public function testCanFilterModels(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->filter('IsWebshopItem eq 0');

        $this->assertInstanceOf(Item::class, $response[0]);
        $this->assertCount(2, $response);
    }

    public function testCanFilterModelsAsGenerator(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->filterAsGenerator('IsWebshopItem eq 0');

        $this->assertEquals(2, iterator_count($response));
    }

    public function testCanGetCollectionFromResult(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);
        $item = new Item($connection);

        $result = $connection->get($item->url(), []);
        $collection = $item->collectionFromResult($result);

        $this->assertInstanceOf(Item::class, $collection[0]);
        $this->assertCount(2, $collection);
    }

    public function testCanGetCollectionFromResultAsGenerator(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);
        $item = new Item($connection);

        $result = $connection->get($item->url(), []);
        $collection = $item->collectionFromResultAsGenerator($result);

        $this->assertEquals(2, iterator_count($collection));
    }

    public function testGeneratorKeepsPaginatingWhenOtherRequestsAreMadeWhileIterating(): void
    {
        $nextUrl = 'https://start.exactonline.nl/api/v1/1234567890/logistics/Items?$skiptoken=guid\'00000000-0000-0000-0000-000000000002\'';
        $handler = $this->createMockHandler([
            $this->createPageResponse(['00000000-0000-0000-0000-000000000001', '00000000-0000-0000-0000-000000000002'], $nextUrl),
            $this->createPageResponse(['00000000-0000-0000-0000-00000000000a']),
            $this->createPageResponse(['00000000-0000-0000-0000-000000000003', '00000000-0000-0000-0000-000000000004']),
        ]);
        $connection = $this->createMockConnection($handler);

        $ids = [];
        foreach ((new Item($connection))->getAsGenerator() as $item) {
            if ($ids === []) {
                // Another request on the same connection resets Connection::$nextUrl
                (new Account($connection))->find('00000000-0000-0000-0000-00000000000a');
            }
            $ids[] = $item->ID;
        }

        $this->assertSame([
            '00000000-0000-0000-0000-000000000001',
            '00000000-0000-0000-0000-000000000002',
            '00000000-0000-0000-0000-000000000003',
            '00000000-0000-0000-0000-000000000004',
        ], $ids);
        $this->assertSame($nextUrl, urldecode((string) $handler->getLastRequest()->getUri()));
    }

    public function testGeneratorUsesNextUrlOfItsOwnRequestWhenIteratedLater(): void
    {
        $handler = $this->createMockHandler([
            $this->createPageResponse(['00000000-0000-0000-0000-000000000001'], 'https://start.exactonline.nl/api/v1/1234567890/logistics/Items?$skiptoken=1'),
            $this->createPageResponse(['00000000-0000-0000-0000-00000000000a']),
            $this->createPageResponse(['00000000-0000-0000-0000-000000000002']),
        ]);
        $connection = $this->createMockConnection($handler);

        $items = (new Item($connection))->getAsGenerator();
        (new Account($connection))->find('00000000-0000-0000-0000-00000000000a');

        $this->assertEquals(2, iterator_count($items));
    }

    public function testCanGetResultSet(): void
    {
        $handler = $this->createMockHandler();
        $connection = $this->createMockConnection($handler);

        $resultSet = (new Item($connection))->getResultSet();

        $this->assertInstanceOf(Resultset::class, $resultSet);
    }

    private function createPageResponse(array $ids, ?string $nextUrl = null): Response
    {
        $page = ['results' => array_map(fn (string $id) => ['ID' => $id], $ids)];
        if ($nextUrl !== null) {
            $page['__next'] = $nextUrl;
        }

        return new Response(200, [], json_encode(['d' => $page]));
    }
}

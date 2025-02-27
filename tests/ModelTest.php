<?php

namespace Picqer\Tests;

use PHPUnit\Framework\TestCase;
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

    public function testCanGetResultSet(): void
    {
        $handler = $this->createMockHandler();
        $connection = $this->createMockConnection($handler);

        $resultSet = (new Item($connection))->getResultSet();

        $this->assertInstanceOf(Resultset::class, $resultSet);
    }
}

<?php

namespace Picqer\Tests;

use Generator;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Item;
use Picqer\Financials\Exact\Query\Resultset;
use Picqer\Tests\Support\MocksExactConnection;

class ModelTest extends TestCase
{
    use MocksExactConnection;

    public function testCanFindModel()
    {
        $handler = $this->createMockHandlerUsingFixture('item.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->find('00000000-0000-0000-0000-000000000000');

        $this->assertInstanceOf(Item::class, $response);
        $this->assertEquals('00000000-0000-0000-0000-000000000000', $response->primaryKeyContent());
    }

    public function testCanGetFirstModel()
    {
        $handler = $this->createMockHandlerUsingFixture('item.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->first();

        $this->assertInstanceOf(Item::class, $response);
        $this->assertEquals('00000000-0000-0000-0000-000000000000', $response->primaryKeyContent());
    }

    public function testCanGetModels()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->get();

        $this->assertIsArray($response);
        $this->assertInstanceOf(Item::class, $response[0]);
        $this->assertCount(2, $response);
    }

    public function testCanGetModelsAsGenerator()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->getAsGenerator();

        $this->assertInstanceOf(Generator::class, $response);
        $this->assertCount(2, $response);
    }

    public function testCanFilterModels()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->filter('IsWebshopItem eq 0');

        $this->assertIsArray($response);
        $this->assertInstanceOf(Item::class, $response[0]);
        $this->assertCount(2, $response);
    }

    public function testCanFilterModelsAsGenerator()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->filterAsGenerator('IsWebshopItem eq 0');

        $this->assertInstanceOf(Generator::class, $response);
        $this->assertCount(2, $response);
    }

    public function testCanGetCollectionFromResult()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);
        $item = new Item($connection);

        $result = $connection->get($item->url(), []);
        $collection = $item->collectionFromResult($result);

        $this->assertIsArray($collection);
        $this->assertInstanceOf(Item::class, $collection[0]);
        $this->assertCount(2, $collection);
    }

    public function testCanGetCollectionFromResultAsGenerator()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);
        $item = new Item($connection);

        $result = $connection->get($item->url(), []);
        $collection = $item->collectionFromResultAsGenerator($result);

        $this->assertInstanceOf(Generator::class, $collection);
        $this->assertCount(2, $collection);
    }

    public function testCanGetResultSet()
    {
        $handler = $this->createMockHandler();
        $connection = $this->createMockConnection($handler);
        $item = new Item($connection);

        $resultset = (new Item($connection))->getResultSet();

        $this->assertInstanceOf(Resultset::class, $resultset);
    }
}

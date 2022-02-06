<?php

namespace Picqer\Tests;

use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Item;
use Picqer\Tests\Support\MocksExactConnection;

class ModelTest extends TestCase
{
    use MocksExactConnection;

    public function testCanGetModels()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->get();

        $this->assertIsArray($response);
        $this->assertInstanceOf(Item::class, $response[0]);
        $this->assertCount(2, $response);
    }

    /** @test */
    public function testCanGetModelsAsGenerator()
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Item($connection))->getGenerator();

        $this->assertIsIterable($response);
        $this->assertCount(2, $response);
    }
}

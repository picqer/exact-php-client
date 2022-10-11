<?php

namespace Picqer\Tests;

use DirectoryIterator;
use PHPUnit\Framework\TestCase;

/**
 * Class EntityTest.
 *
 * Tests all entities to ensure entities have no PHP parse errors and have
 * at least the properties we need to use the entity
 */
class EntityTest extends TestCase
{
    /**
     * @dataProvider entityDataProvider
     */
    public function testEntities(string $entityClassName): void
    {
        $reflectionClass = new \ReflectionClass($entityClassName);

        $this->assertTrue($reflectionClass->isInstantiable());
        $this->assertTrue($reflectionClass->hasProperty('fillable'));
        $this->assertTrue($reflectionClass->hasProperty('url'));
        $this->assertEquals('Picqer\Financials\Exact', $reflectionClass->getNamespaceName());
        $this->assertTrue($reflectionClass->isSubclassOf('Picqer\Financials\Exact\Model'));
    }

    public function entityDataProvider(): \Generator
    {
        $namespace = 'Picqer\Financials\Exact';
        $iterator = new DirectoryIterator(__DIR__ . '/../src/Picqer/Financials/Exact/');
        $notAnEntity = [
            'Connection.php',
            'ApiException.php',
            'Model.php',
        ];

        while ($iterator->valid()) {
            /** @var \SplFileInfo $file */
            $file = $iterator->current();

            if (! $file->isFile() || $file->getExtension() !== 'php' || in_array($file->getFilename(), $notAnEntity)) {
                $iterator->next();
                continue;
            }

            $className = substr($file->getFilename(), 0, -4);
            yield ["{$namespace}\\{$className}"];
            $iterator->next();
        }
    }
}

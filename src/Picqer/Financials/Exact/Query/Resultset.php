<?php

declare(strict_types=1);

namespace Picqer\Financials\Exact\Query;

use Generator;
use Picqer\Financials\Exact\Connection;

/**
 * Class Resultset.
 */
class Resultset
{
    protected Connection $connection;

    protected ?string $url;

    protected string $class;

    protected array $params;

    /**
     * @param array<string, mixed> $params
     */
    public function __construct(Connection $connection, ?string $url, string $class, array $params)
    {
        $this->connection = $connection;
        $this->url = $url;
        $this->class = $class;
        $this->params = $params;
    }

    public function next(): array
    {
        return iterator_to_array($this->nextAsGenerator());
    }

    public function nextAsGenerator(): Generator
    {
        $result = $this->connection->get($this->url, $this->params);
        $this->url = $this->connection->nextUrl;
        $this->params = [];

        return $this->collectionFromResultAsGenerator($result);
    }

    public function hasMore(): bool
    {
        return $this->url !== null;
    }

    protected function collectionFromResult(array $result): array
    {
        return iterator_to_array(
            $this->collectionFromResultAsGenerator($result)
        );
    }

    protected function collectionFromResultAsGenerator(array $result): Generator
    {
        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [$result];
        }

        $class = $this->class;

        foreach ($result as $r) {
            yield new $class($this->connection, $r);
        }
    }
}

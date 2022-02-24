<?php

namespace Picqer\Financials\Exact\Query;

use Generator;
use Picqer\Financials\Exact\Connection;

/**
 * Class Resultset.
 */
class Resultset
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var array
     */
    protected $params;

    /**
     * Resultset constructor.
     *
     * @param Connection $connection
     * @param string     $url
     * @param string     $class
     * @param array      $params
     */
    public function __construct(Connection $connection, $url, $class, array $params)
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

    /**
     * @return bool
     */
    public function hasMore()
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

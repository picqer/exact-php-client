<?php

namespace Picqer\Financials\Exact\Query;

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

    /**
     * @return array
     */
    public function next()
    {
        $result = $this->connection->get($this->url, $this->params);
        $this->url = $this->connection->nextUrl;
        $this->params = [];

        return $this->collectionFromResult($result);
    }

    /**
     * @return bool
     */
    public function hasMore()
    {
        return $this->url !== null;
    }

    /**
     * @param array $result
     *
     * @return array
     */
    protected function collectionFromResult($result)
    {
        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [$result];
        }

        $class = $this->class;
        $collection = [];

        foreach ($result as $r) {
            $collection[] = new $class($this->connection, $r);
        }

        return $collection;
    }
}

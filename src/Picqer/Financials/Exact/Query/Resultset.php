<?php namespace Picqer\Financials\Exact\Query;

class Resultset
{
    protected $connection;

    protected $url;

    protected $class;

    protected $params;

    public function __construct($connection, $url, $class, $params)
    {
        $this->connection = $connection;
        $this->url = $url;
        $this->class = $class;
        $this->params = $params;
    }

    public function next()
    {
        $result = $this->connection->get($this->url, $this->params);
        $this->url = $this->connection->nextUrl;
        $this->params = null;
        return $this->collectionFromResult($result, $this->class);
    }

    public function hasMore()
    {
        return $this->url !== null;
    }

    protected function collectionFromResult($result)
    {
        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [ $result ];
        }

        $class = $this->class;
        $collection = [];

        foreach ($result as $r) {
            $collection[] = new $class($this->connection, $r);
        }

        return $collection;
    }
}

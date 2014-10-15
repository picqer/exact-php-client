<?php namespace Picqer\Financials\Exact\Query;

trait Findable
{
    public function find($id)
    {
        $result = $this->connection()->get($this->url, [
            '$filter' => $this->primaryKey . " eq guid'$id'"
        ]);

        return new self($this->connection(), $result);
    }

    public function filter($filter)
    {
        $result = $this->connection()->get($this->url, [
            '$filter' => $filter
        ]);

        return new self($this->connection(), $result);
    }

    public function get()
    {
        $result = $this->connection()->get($this->url);

        return $this->collectionFromResult($result);
    }

    public function collectionFromResult($result)
    {
        $collection = [];
        foreach ($result as $r)
        {
            $collection[] = new self($this->connection(), $r);
        }

        return $collection;
    }
}
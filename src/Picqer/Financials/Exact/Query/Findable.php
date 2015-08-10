<?php namespace Picqer\Financials\Exact\Query;

use Picqer\Financials\Exact\Model;

trait Findable {

    public function find($id)
    {
        $result = $this->connection()->get($this->url, [
            '$filter' => $this->primaryKey . " eq guid'$id'"
        ]);

        return new self($this->connection(), $result);
    }

    public function filter($filter, $expand = '', $select='')
    {
        $request = [
            '$filter' => $filter
        ];
        if (strlen($expand) > 0)
        {
            $request['$expand'] = $expand;
        }
        if (strlen($select) > 0)
        {
            $request['$select'] = $select;
        }
        
        $result = $this->connection()->get($this->url, $request);

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
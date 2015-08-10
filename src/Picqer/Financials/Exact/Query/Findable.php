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


    public function filter($filter, $expand = '', $select = '')
    {
        $request = [
            '$filter' => $filter
        ];
        if (strlen($expand) > 0) {
            $request['$expand'] = $expand;
        }
        if (strlen($select) > 0) {
            $request['$select'] = $select;
        }

        $result = $this->connection()->get($this->url, $request);

        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [ $result ];
        }

        return $this->collectionFromResult($result);
    }


    public function get()
    {
        $result = $this->connection()->get($this->url);

        return $this->collectionFromResult($result);
    }


    public function collectionFromResult($result)
    {
        $collection = [ ];
        foreach ($result as $r) {
            $collection[] = new self($this->connection(), $r);
        }

        return $collection;
    }
}
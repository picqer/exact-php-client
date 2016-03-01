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


    public function findWithSelect($id, $select = '')
    {
        $result = $this->connection()->get($this->url, [
            '$filter' => $this->primaryKey . " eq guid'$id'",
            '$select' => $select
        ]);
        
        return new self($this->connection(), $result);
    }


    public function filter($filter, $expand = '', $select = '', $system_query_options = null)
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
        if (is_array($system_query_options)) {
            // merge in other options
            // no verification of proper system query options
            $request = array_merge($system_query_options, $request);
        }

        $result = $this->connection()->get($this->url, $request);

        return $this->collectionFromResult($result);
    }


    public function get()
    {
        $result = $this->connection()->get($this->url);

        return $this->collectionFromResult($result);
    }


    public function collectionFromResult($result)
    {
        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [ $result ];
        }

        while ($this->connection()->nextUrl !== null)
        {
            $nextResult = $this->connection()->get($this->connection()->nextUrl);
            $result = array_merge($result, $nextResult);
        }
        $collection = [ ];
        foreach ($result as $r) {
            $collection[] = new self($this->connection(), $r);
        }

        return $collection;
    }
}

<?php namespace Picqer\Financials\Exact\Query;
trait Relatable
{
    public function relate($parentId)
    {
        $result = $this->connection()->get($this->url, [
            $this->parentKey => "guid'$parentId'"
        ]);
        return $this->collectionRelatedFromResult($result);
    }
    
    public function relateWithSelect($parentId, $select = '')
    {
        //eg: $oAccountDocuments->findWithSelect('5b7f4515-b7a0-4839-ac69-574968677d96', 'Code, Name');
        $result = $this->connection()->get($this->url, [
            $this->parentKey => "guid'$parentId'",
            '$select' => $select
        ]);
        return $this->collectionRelatedFromResult($result);
    }
    
    public function relateWithSearch($parentId, $searchText = '', $searchFullText = false, $select = '')
    {
        $request = [
            $this->parentKey => "guid'$parentId'",
            '$select' => $select,
            'searchFullText' => ($searchFullText)?'true':'false'
        ];
        
        if (!empty($searchText)) {
            $request['searchText'] = "'{$searchText}'";
        }
        
        $result = $this->connection()->get($this->url, $request);
        
        return $this->collectionRelatedFromResult($result);
    }
    
    public function collectionRelatedFromResult($result)
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
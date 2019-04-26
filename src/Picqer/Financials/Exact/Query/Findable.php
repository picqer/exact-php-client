<?php

namespace Picqer\Financials\Exact\Query;

use Picqer\Financials\Exact\Connection;

trait Findable
{
    /**
     * @return Connection
     */
    abstract public function connection();

    abstract public function isFillable($key);

    /**
     * @return string
     */
    abstract public function url();

    /**
     * @return string
     */
    abstract public function primaryKey();

    public function find($id)
    {
        $filter = $this->primaryKey() . " eq guid'$id'";

        if ($this->primaryKey() === 'Code') {
            $filter = $this->primaryKey() . " eq $id";
        }

        $records = $this->connection()->get($this->url(), [
            '$filter' => $filter,
            '$top'    => 1, // The result will always be 1 but on some entities Exact gives an error without it.
        ]);

        $result = isset($records[0]) ? $records[0] : [];

        return new self($this->connection(), $result);
    }

    public function findWithSelect($id, $select = '')
    {
        //eg: $oAccounts->findWithSelect('5b7f4515-b7a0-4839-ac69-574968677d96', 'Code, Name');
        $result = $this->connection()->get($this->url(), [
            '$filter' => $this->primaryKey() . " eq guid'$id'",
            '$select' => $select,
        ]);

        return new self($this->connection(), $result);
    }

    /**
     * Return the value of the primary key.
     *
     * @param string $code the value to search for
     * @param string $key  the key being searched (defaults to 'Code')
     *
     * @return string (guid)
     */
    public function findId($code, $key = 'Code')
    {
        if ($this->isFillable($key)) {
            $format = ($this->url() == 'crm/Accounts' && $key === 'Code') ? '%18s' : '%s';
            if (preg_match('/^[\w]{8}-([\w]{4}-){3}[\w]{12}$/', $code)) {
                $format = "guid'$format'";
            } elseif (is_string($code)) {
                $format = "'$format'";
            }

            $filter = sprintf("$key eq $format", $code);
            $request = [
                '$filter'  => $filter,
                '$top'     => 1,
                '$select'  => $this->primaryKey(),
                '$orderby' => $this->primaryKey(),
            ];
            if ($records = $this->connection()->get($this->url(), $request)) {
                return $records[0][$this->primaryKey()];
            }
        }
    }

    public function filter($filter, $expand = '', $select = '', $system_query_options = null, array $headers = [])
    {
        $originalDivision = $this->connection()->getDivision();

        if ($this->isFillable('Division') && preg_match("@Division[\t\r\n ]+eq[\t\r\n ]+([0-9]+)@i", $filter, $divisionId)) {
            $this->connection()->setDivision($divisionId[1]); // Fix division
        }

        $request = [
            '$filter' => $filter,
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

        $result = $this->connection()->get($this->url(), $request, $headers);

        if (! empty($divisionId)) {
            $this->connection()->setDivision($originalDivision); // Restore division
        }

        return $this->collectionFromResult($result);
    }

    /**
     * Returns the first Financial model in by applying $top=1 to the query string.
     *
     * @return \Picqer\Financials\Exact\Model|null
     */
    public function first()
    {
        $results = $this->filter('', '', '', ['$top'=> 1]);
        $result = is_array($results) && count($results) > 0 ? $results[0] : null;

        return $result;
    }

    public function getResultSet(array $params = [])
    {
        return new Resultset($this->connection(), $this->url(), get_class($this), $params);
    }

    public function get(array $params = [])
    {
        $result = $this->connection()->get($this->url(), $params);

        return $this->collectionFromResult($result);
    }

    public function collectionFromResult($result)
    {
        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [$result];
        }

        while ($this->connection()->nextUrl !== null) {
            $nextResult = $this->connection()->get($this->connection()->nextUrl);

            // If we have one result which is not an assoc array, make it the first element of an array for the array_merge function
            if ((bool) count(array_filter(array_keys($nextResult), 'is_string'))) {
                $nextResult = [$nextResult];
            }

            $result = array_merge($result, $nextResult);
        }
        $collection = [];
        foreach ($result as $r) {
            $collection[] = new self($this->connection(), $r);
        }

        return $collection;
    }
}

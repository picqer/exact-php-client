<?php

declare(strict_types=1);

namespace Picqer\Financials\Exact\Query;

use Generator;
use Picqer\Financials\Exact\Connection;
use Picqer\Financials\Exact\Model;

/**
 * @template T of Model
 */
trait Findable
{
    /**
     * @return Connection
     */
    abstract public function connection();

    abstract protected function isFillable($key);

    abstract public function url(): string;

    abstract public function primaryKey(): string;

    /**
     * @return T
     */
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

        return new static($this->connection(), $result);
    }

    /**
     * @return T
     */
    public function findWithSelect($id, $select = '')
    {
        //eg: $oAccounts->findWithSelect('5b7f4515-b7a0-4839-ac69-574968677d96', 'Code, Name');
        $result = $this->connection()->get($this->url(), [
            '$filter' => $this->primaryKey() . " eq guid'$id'",
            '$select' => $select,
        ]);

        return new static($this->connection(), $result);
    }

    /**
     * Return the value of the primary key.
     *
     * @param string|int $code the value to search for
     * @param string $key  the key being searched (defaults to 'Code')
     *
     * @return string|void (guid)
     */
    public function findId($code, $key = 'Code')
    {
        if ($this->isFillable($key)) {
            $format = ($this->url() == 'crm/Accounts' && $key === 'Code') ? '%18s' : '%s';
            if (is_string($code) && preg_match('/^[\w]{8}-([\w]{4}-){3}[\w]{12}$/', $code)) {
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

    /**
     * @return T[]
     */
    public function filter($filter, $expand = '', $select = '', $system_query_options = null, array $headers = []): array
    {
        return iterator_to_array(
            $this->filterAsGenerator($filter, $expand, $select, $system_query_options, $headers)
        );
    }

    /**
     * @return Generator<T>
     */
    public function filterAsGenerator($filter, $expand = '', $select = '', $system_query_options = null, array $headers = []): Generator
    {
        $originalDivision = $this->connection()->getDivision();

        if ($this->isFillable('Division') && preg_match("@Division[\t\r\n ]+eq[\t\r\n ]+([0-9]+)@i", $filter, $divisionId)) {
            $this->connection()->setDivision($divisionId[1]); // Fix division
        }

        $request = [];
        if (! empty($filter)) {
            $request['$filter'] = $filter;
        }

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

        return $this->collectionFromResultAsGenerator($result, $headers);
    }

    /**
     * Returns the first Financial model in by applying $top=1 to the query string.
     *
     * @return T|null
     */
    public function first($filter = '', $expand = '', $select = '', $system_query_options = null, array $headers = [])
    {
        $query_options = [
            '$top'=> 1,
        ];

        if (is_array($system_query_options)) {
            // Remove this option, we only want 1 record
            unset($system_query_options['$top']);

            $query_options = array_merge($query_options, $system_query_options);
        }

        $results = $this->filter($filter, $expand, $select, $query_options, $headers);

        return count($results) > 0 ? $results[0] : null;
    }

    public function getResultSet(array $params = [])
    {
        return new Resultset($this->connection(), $this->url(), get_class($this), $params);
    }

    /**
     * @return T[]
     */
    public function get(array $params = []): array
    {
        return iterator_to_array($this->getAsGenerator($params));
    }

    /**
     * @return Generator<T>
     */
    public function getAsGenerator(array $params = []): Generator
    {
        $result = $this->connection()->get($this->url(), $params);

        return $this->collectionFromResultAsGenerator($result);
    }

    /**
     * @return T[]
     */
    public function collectionFromResult($result, array $headers = []): array
    {
        return iterator_to_array(
            $this->collectionFromResultAsGenerator($result, $headers)
        );
    }

    /**
     * @return Generator<T>
     */
    public function collectionFromResultAsGenerator($result, array $headers = []): Generator
    {
        // If we have one result which is not an assoc array, make it the first element of an array for the
        // collectionFromResult function so we always return a collection from filter
        if ((bool) count(array_filter(array_keys($result), 'is_string'))) {
            $result = [$result];
        }

        foreach ($result as $row) {
            yield new static($this->connection(), $row);
        }

        while ($this->connection()->nextUrl !== null) {
            $nextResult = $this->connection()->get($this->connection()->nextUrl, [], $headers);

            // If we have one result which is not an assoc array, make it the first element of an array for the array_merge function
            if ((bool) count(array_filter(array_keys($nextResult), 'is_string'))) {
                $nextResult = [$nextResult];
            }

            foreach ($nextResult as $row) {
                yield new static($this->connection(), $row);
            }
        }
    }
}

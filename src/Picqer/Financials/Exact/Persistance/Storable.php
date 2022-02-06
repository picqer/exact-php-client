<?php

namespace Picqer\Financials\Exact\Persistance;

use Picqer\Financials\Exact\ApiException;
use Picqer\Financials\Exact\Connection;

trait Storable
{
    /**
     * @return bool
     */
    abstract public function exists();

    /**
     * @param array $attributes
     */
    abstract protected function fill(array $attributes);

    /**
     * @param int  $options
     * @param bool $withDeferred
     *
     * @return string
     */
    abstract public function json($options = 0, $withDeferred = false);

    /**
     * @return Connection
     */
    abstract public function connection();

    /**
     * @return string
     */
    abstract public function url();

    /**
     * @return mixed
     */
    abstract public function primaryKeyContent();

    /**
     * @throws ApiException
     *
     * @return $this
     */
    public function save()
    {
        if ($this->exists()) {
            $this->fill($this->update());
        } else {
            $this->fill($this->insert());
        }

        return $this;
    }

    /**
     * @throws ApiException
     *
     * @return array|mixed
     */
    public function insert()
    {
        return $this->connection()->post($this->url(), $this->json(0, true));
    }

    /**
     * @throws ApiException
     *
     * @return array|mixed
     */
    public function update()
    {
        $primaryKey = $this->primaryKeyContent();

        return $this->connection()->put($this->url() . "(guid'$primaryKey')", $this->json());
    }

    /**
     * @throws ApiException
     *
     * @return array|mixed
     */
    public function delete()
    {
        $primaryKey = $this->primaryKeyContent();

        return $this->connection()->delete($this->url() . "(guid'$primaryKey')");
    }
}

<?php namespace Picqer\Financials\Exact\Persistance;

use Picqer\Financials\Exact\Connection;

trait Storable
{
    /**
     * @return boolean
     */
    abstract function exists();

    /**
     * @param array $attributes
     */
    abstract function fill(array $attributes);

    /**
     * @param int $options
     * @param bool $withDeferred
     * @return string
     */
    abstract function json($options = 0, $withDeferred = false);

    /**
     * @return Connection
     */
    abstract function connection();

    /**
     * @return string
     */
    abstract function url();

    /**
     * @return mixed
     */
    abstract function primaryKeyContent();

    /**
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

    public function insert()
    {
        return $this->connection()->post($this->url(), $this->json(0, true));
    }

    public function update()
    {
        $primaryKey = $this->primaryKeyContent();

        return $this->connection()->put($this->url() . "(guid'$primaryKey')", $this->json());
    }

    public function delete()
    {
        $primaryKey = $this->primaryKeyContent();

        return $this->connection()->delete($this->url() . "(guid'$primaryKey')");
    }
}

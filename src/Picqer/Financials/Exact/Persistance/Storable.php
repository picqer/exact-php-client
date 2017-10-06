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
    abstract function fill($attributes);

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
        return $this->connection()->post($this->url, $this->json(0, true));
    }

    public function update()
    {
        $key = $this->primaryKey;
        $primarykey = $this->$key;

        return $this->connection()->put($this->url . "(guid'$primarykey')", $this->json());
    }

    public function delete()
    {
        $key = $this->primaryKey;
        $primarykey = $this->$key;

        return $this->connection()->delete($this->url . "(guid'$primarykey')");
    }
}

<?php namespace Picqer\Financials\Exact;

use Rhumsaa\Uuid\Uuid;

abstract class Model {

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var array The model's attributes
     */
    protected $attributes = [];

    /**
     * @var array The model's fillable attributes
     */
    protected $fillable = [];

    /**
     * @var string The URL endpoint of this model
     */
    protected $url = '';

    /**
     * @var string Name of the primary key for this model
     */
    protected $primaryKey = 'ID';

    protected $exists = false;

    public function __construct(Connection $connection, array $attributes = [])
    {
        $this->connection = $connection;
        $this->fill($attributes);
    }

    /**
     * Get the connection instance
     *
     * @return Connection
     */
    public function connection()
    {
        return $this->connection;
    }

    /**
     * Get the model's attributes
     *
     * @return array
     */
    public function attributes()
    {
        return $this->attributes;
    }

    /**
     * Fill the entity from an array
     *
     * @param array $attributes
     */
    protected function fill(array $attributes)
    {
        if (empty($attributes))
        {
            return false;
        }
        foreach ($this->fillableFromArray($attributes) as $key => $value)
        {
            if ($this->isFillable($key))
            {

                $this->setAttribute($key, $value);
            }
        }

        if ($this->__get($this->primaryKey)) {
            $this->exists = true;
        } else {
            $this->exists = false;
        }
    }

    /**
     * Get the fillable attributes of an array
     *
     * @param array $attributes
     * @return array
     */
    protected function fillableFromArray(array $attributes)
    {
        if (count($this->fillable) > 0)
        {
            return array_intersect_key($attributes, array_flip($this->fillable));
        }

        return $attributes;
    }

    protected function isFillable($key)
    {
        return in_array($key, $this->fillable);
    }

    protected function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function __get($key)
    {
        if (isset($this->attributes[$key]))
        {
            return $this->attributes[$key];
        }
    }

    public function __set($key, $value)
    {
        if ($this->isFillable($key))
        {
            return $this->setAttribute($key, $value);
        }
    }

    public function exists()
    {
        return $this->exists;
//        if (! in_array($this->primaryKey, $this->attributes)) return false;

//        return ! empty($this->attributes[$this->primaryKey]);
    }

    public function json()
    {
        return json_encode($this->attributes);
    }

}
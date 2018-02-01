<?php namespace Picqer\Financials\Exact;

/**
 * Class Model
 *
 * @package Picqer\Financials\Exact
 *
 */

abstract class Model implements \JsonSerializable
{

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var array The model's attributes
     */
    protected $attributes = [];
    
    /**
     * @deferred array The model's collection values
     */
    protected $deferred = [];

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
     * Get the model's url
     *
     * @return string
     */
    public function url()
    {
        return $this->url;
    }

    /**
     * Get the model's primary key
     *
     * @return string
     */
    public function primaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * Get the model's primary key value
     *
     * @return mixed
     */
    public function primaryKeyContent()
    {
        return $this->__get($this->primaryKey);
    }

    /**
     * Fill the entity from an array
     *
     * @param array $attributes
     */
    protected function fill(array $attributes)
    {
        foreach ($this->fillableFromArray($attributes) as $key => $value) {
            if ($this->isFillable($key)) {
                $this->setAttribute($key, $value);
            }
        }
    }


    /**
     * Get the fillable attributes of an array
     *
     * @param array $attributes
     *
     * @return array
     */
    protected function fillableFromArray(array $attributes)
    {
        if (count($this->fillable) > 0) {
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
    
    /**
     * Resolve deferred values
     *
     * @param string $key
     * @return bool Returns true when collection is found
     */
    protected function lazyLoad($key)
    {
        // Check previously resolved or manualy set.
        if (isset($this->deferred[$key])) {
            return true;
        }

        try {
            if (array_key_exists($key, $this->attributes) && is_array($this->attributes[$key]) && array_key_exists('__deferred', $this->attributes[$key])) {
                $class = preg_replace('/(.+?)s?$/', __NAMESPACE__ . '\\\$1', $key); // Filter plural 's' and add namespace
                $deferred = new $class($this->connection());
                $uri = $this->attributes[$key]['__deferred']['uri'];
                $deferred->connection()->nextUrl = $uri; // $uri is complete, by setting it to nextUrl Connection->formatUrl leaves it as is.
                $result = $deferred->connection()->get($uri);
                $this->deferred[$key] = $deferred->collectionFromResult($result);

                return true;
            }
        }
        catch (\Exception $e) {
            // We tried lets leave it as is.
        }

        return false;
    }

    public function __get($key)
    {
        if ($this->lazyLoad($key)) {
            return $this->deferred[$key];
        }
        
        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        }
    }


    public function __set($key, $value)
    {
        if ($this->isFillable($key)) {
            if (is_array($value)) {
                $this->deferred[$key] = $value;
                return;
            }

            $this->setAttribute($key, $value);
        }
    }
    
    public function __isset($name)
    {
        return $this->__get($name) !== null;
    }

    public function __call($name, $arguments)
    {
        return $this->__get($name);
    }

    /**
     * Checks if primaryKey holds a value
     *
     * @return boolean
     */
    public function exists()
    {
        if ( ! array_key_exists($this->primaryKey, $this->attributes)) {
            return false;
        }

        return ! empty($this->attributes[$this->primaryKey]);
    }


    /**
     * Return the JSON representation of the data
     *
     * @param int $options http://php.net/manual/en/json.constants.php
     *
     * @return string
     */
    public function json($options = 0, $withDeferred = false)
    {
        $attributes = $this->attributes;
        if ($withDeferred) {
            foreach ($this->deferred as $attribute => $collection) {
                if (empty($collection)) {
                    continue; // Leave orriginal array with __deferred key
                }

                $attributes[$attribute] = [];
                foreach ($collection as $value) {
                    if(!empty($value->deferred)) {
                        $value->attributes = array_merge($value->attributes, $value->deferred);
                    }

                    if (is_a($value, 'Picqer\Financials\Exact\Model')) {
                        array_push($attributes[$attribute], $value->attributes);
                    } else {
                        array_push($attributes[$attribute], $value);
                    }
                }
            }
        }

        return json_encode($attributes, $options);
    }


    /**
     * Return serializable data
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->attributes;
    }


    /**
     * Check whether the current user has rights for an action on this endpoint
     * https://start.exactonline.nl/docs/HlpRestAPIResources.aspx?SourceAction=10
     *
     * @param string $action
     *
     * @return boolean
     */
    public function userHasRights($action = 'GET')
    {
        $action = preg_match('/^GET|POST|PUT|DELETE$/i', $action) ? strtoupper($action) : 'GET';
        $result = $this->connection()->get('users/UserHasRights', [
            'endpoint' => "'{$this->url}'",
            'action' => "'{$action}'"
        ]);
        return isset($result['UserHasRights']) ? $result['UserHasRights'] : null;
    }

}

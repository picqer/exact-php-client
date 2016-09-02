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
    protected $attributes = [ ];

    /**
     * @var array The model's fillable attributes
     */
    protected $fillable = [ ];

    /**
     * @var string The URL endpoint of this model
     */
    protected $url = '';

    /**
     * @var string Name of the primary key for this model
     */
    protected $primaryKey = 'ID';


    public function __construct(Connection $connection, array $attributes = [ ])
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


    public function __get($key)
    {
        if (isset( $this->attributes[$key] )) {
            return $this->attributes[$key];
        }
    }


    public function __set($key, $value)
    {
        if ($this->isFillable($key)) {
            return $this->setAttribute($key, $value);
        }
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

        return ! empty( $this->attributes[$this->primaryKey] );
    }


    /**
     * Return the JSON representation of the data
     *
     * @param int $options http://php.net/manual/en/json.constants.php
     *
     * @return string
     */
    public function json($options = 0)
    {
        return json_encode($this->attributes, $options);
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
    public function userHasRights($action='GET')
    {
        $action =  preg_match('/^GET|POST|PUT|DELETE$/i', $action) ? strtoupper($action) : 'GET';
        $result = $this->connection()->get('users/UserHasRights', [
            'endpoint' => "'{$this->url}'",
            'action' => "'{$action}'"
        ]);
        return isset($result['UserHasRights']) ? $result['UserHasRights'] : null;
    }

    /**
     * Return the value of the primary key
     *
     * @param string $code the value to search for
     * @param string $key  the key being searched (defaults to 'Code')
     *
     * @return string (guid)
     */
    public function findId($code, $key='Code'){
        if ( $this->isFillable($key) ) {
            $format = $this->url == 'crm/Accounts' ? '%18s' : '%s';
            $filter = sprintf("$key eq '$format'", $code);
            $request = array('$filter' => $filter, '$top' => 1, '$orderby' => $this->primaryKey);
            if( $records = $this->connection()->get($this->url, $request) ){
                return $records[0][$this->primaryKey];
            }
        }
    }

}

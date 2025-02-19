<?php

declare(strict_types=1);

namespace Picqer\Financials\Exact;

/**
 * Class Model.
 *
 * @phpstan-consistent-constructor
 */
abstract class Model implements \JsonSerializable
{
    protected Connection $connection;

    protected array $attributes = [];

    protected array $deferred = [];

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

    final public function __construct(Connection $connection, array $attributes = [])
    {
        $this->connection = $connection;
        $this->fill($attributes);
    }

    /**
     * Get the connection instance.
     */
    public function connection(): Connection
    {
        return $this->connection;
    }

    /**
     * Get the model's attributes.
     *
     * @return array<string, mixed>
     */
    public function attributes(): array
    {
        return $this->attributes;
    }

    /**
     * Get the model's url.
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * Get the model's primary key.
     */
    public function primaryKey(): string
    {
        return $this->primaryKey;
    }

    /**
     * Get the model's primary key value.
     *
     * @return mixed
     */
    public function primaryKeyContent()
    {
        return $this->__get($this->primaryKey);
    }

    /**
     * Fill the entity from an array.
     *
     * @param array<string, mixed> $attributes
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
     * Get the fillable attributes of an array.
     *
     * @param array<string, mixed> $attributes
     *
     * @return array<string, mixed>
     */
    protected function fillableFromArray(array $attributes)
    {
        if (count($this->fillable) > 0) {
            return array_intersect_key($attributes, array_flip($this->fillable));
        }

        return $attributes;
    }

    protected function isFillable($key): bool
    {
        return in_array($key, $this->fillable);
    }

    /**
     * @return array<string, mixed>
     */
    public function getFillable(): array
    {
        return $this->fillable;
    }

    protected function setAttribute($key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    /**
     * Resolve deferred values.
     */
    protected function lazyLoad(string $key): bool
    {
        // Check previously resolved or manually set.
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
        } catch (\Exception $e) {
            // We tried lets leave it as is.
        }

        return false;
    }

    public function __get(string $key)
    {
        if ($this->lazyLoad($key)) {
            return $this->deferred[$key];
        }

        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        }
    }

    public function __set(string $key, $value)
    {
        if ($this->isFillable($key)) {
            if (is_array($value)) {
                $this->deferred[$key] = $value;

                return;
            }

            $this->setAttribute($key, $value);
        }
    }

    public function __isset(string $name)
    {
        return $this->__get($name) !== null;
    }

    public function __call(string $name, $arguments)
    {
        return $this->__get($name);
    }

    /**
     * Refresh deferred item by clearing and then lazy loading it.
     *
     * @param mixed $key
     *
     * @return mixed
     */
    public function refresh($key)
    {
        unset($this->deferred[$key]);

        return $this->__get($key);
    }

    /**
     * Checks if primaryKey holds a value.
     */
    public function exists(): bool
    {
        if (! array_key_exists($this->primaryKey, $this->attributes)) {
            return false;
        }

        return ! empty($this->attributes[$this->primaryKey]);
    }

    /**
     * Return the JSON representation of the data.
     */
    public function json(int $options = 0, bool $withDeferred = false): string
    {
        $attributes = $this->attributes;
        if ($withDeferred) {
            foreach ($this->deferred as $attribute => $collection) {
                if (empty($collection)) {
                    continue; // Leave original array with __deferred key
                }

                $attributes[$attribute] = [];
                foreach ($collection as $value) {
                    if (! empty($value->deferred)) {
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
     * Return serializable data.
     *
     * @return array<string, mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        return $this->attributes;
    }

    /**
     * Check whether the current user has rights for an action on this endpoint
     * https://start.exactonline.nl/docs/HlpRestAPIResources.aspx?SourceAction=10.
     */
    public function userHasRights(string $action = 'GET'): ?bool
    {
        $action = preg_match('/^GET|POST|PUT|DELETE$/i', $action) ? strtoupper($action) : 'GET';
        $result = $this->connection()->get('users/UserHasRights', [
            'endpoint' => "'{$this->url}'",
            'action'   => "'{$action}'",
        ]);

        return $result['UserHasRights'] ?? null;
    }
}

<?php

declare(strict_types=1);

namespace Picqer\Financials\Exact\Persistance;

use Picqer\Financials\Exact\ApiException;
use Picqer\Financials\Exact\Connection;

trait Storable
{
    abstract public function exists(): bool;

    /**
     * @param array<string, mixed> $attributes
     */
    abstract protected function fill(array $attributes);

    abstract public function json(int $options = 0, bool $withDeferred = false): string;

    abstract public function connection(): Connection;

    abstract public function url(): string;

    /**
     * @return mixed
     */
    abstract public function primaryKeyContent();

    /**
     * @throws ApiException
     *
     * @return $this
     */
    public function save(): self
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

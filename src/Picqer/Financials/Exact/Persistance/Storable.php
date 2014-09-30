<?php namespace Picqer\Financials\Exact\Persistance;

trait Storable
{
    public function save()
    {
        if ($this->exists()) {
            $result = $this->update();
        } else {
            $result = $this->insert();
        }
        return $this->find($result[$this->primaryKey]);
    }

    public function insert()
    {
        return $this->connection()->post($this->url, $this->json());
    }

    public function update()
    {
        return $this->connection()->put($this->url . "(guid'$this->primaryKey')", $this->json());
    }

    public function delete()
    {
        return $this->connection()->delete($this->url . "(guid'$this->primaryKey')");
    }
}
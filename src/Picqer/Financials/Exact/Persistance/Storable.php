<?php namespace Picqer\Financials\Exact\Persistance;

trait Storable {

    public function save()
    {
        if ($this->exists())
        {
            $this->fill($this->update());
        } else
        {
            $this->fill($this->insert());
        }

        return $this;
    }

    public function insert()
    {
        return $this->connection()->post($this->url, $this->json());
    }

    public function update()
    {
        if (!$this->__get($this->primaryKey)) {
            $this->insert();
        }

        return $this->connection()->put($this->url . "(guid'".$this->__get($this->primaryKey)."')", $this->json());
    }

    public function delete()
    {
        if (!$this->__get($this->primaryKey)) {
            return;
        }

        return $this->connection()->delete($this->url . "(guid'".$this->__get($this->primaryKey)."')");
    }
}
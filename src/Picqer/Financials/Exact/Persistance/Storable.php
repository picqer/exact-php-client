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
        return $this->connection()->put($this->url . "(guid'$this->attributes[$this->primaryKey]')", $this->json());
    }

    public function delete()
    {
        return $this->connection()->delete($this->url . "(guid'$this->attributes[$this->primaryKey]')");
    }
}

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
        return $this->connection()->post($this->url, $this->json(0, TRUE));
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

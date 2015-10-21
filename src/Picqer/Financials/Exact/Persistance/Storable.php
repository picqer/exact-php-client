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
<<<<<<< HEAD
        return $this->connection()->put($this->url . "(guid'" . $this->attributes[$this->primaryKey] . "')", $this->json());
=======
        $key = $this->primaryKey;
        $primarykey = $this->$key;

        return $this->connection()->put($this->url . "(guid'$primarykey')", $this->json());
>>>>>>> upstream/master
    }

    public function delete()
    {
<<<<<<< HEAD
        return $this->connection()->delete($this->url . "(guid'" . $this->attributes[$this->primaryKey] . "')");
=======
        $key = $this->primaryKey;
        $primarykey = $this->$key;

        return $this->connection()->delete($this->url . "(guid'$primarykey')");
>>>>>>> upstream/master
    }
}

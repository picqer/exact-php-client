<?php namespace Picqer\Financials\Exact\Persistance;

use \GuzzleHttp\Client;
use Picqer\Financials\Exact\Connection;

trait Downloadable
{
    /**
     * @return Connection
     */
    abstract function connection();

    /**
     * @return Binary representation of file
     */
    public function download()
    {
        $client = new Client();

        $uri = $this->Url . '&Download=1';

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Prefer' => 'return=representation',
            'Authorization' => 'Bearer ' . $this->connection->getAccessToken(),
        ];

        $res = $client->get($uri, [
          'headers' => $headers
        ]);

        return $res->getBody();
    }
}

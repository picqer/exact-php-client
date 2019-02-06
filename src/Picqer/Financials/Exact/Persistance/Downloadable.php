<?php namespace Picqer\Financials\Exact\Persistance;

use \GuzzleHttp\Client;
use Picqer\Financials\Exact\Connection;

trait Downloadable
{
    /**
     * @return Connection
     */
    abstract public function connection();

    /**
     * @return string
     */
    abstract public function getDownloadUrl();

    /**
     * @return mixed Binary representation of file
     */
    public function download()
    {
        $client = new Client();

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Prefer' => 'return=representation',
            'Authorization' => 'Bearer ' . $this->connection()->getAccessToken(),
        ];

        $res = $client->get($this->getDownloadUrl(), [
          'headers' => $headers
        ]);

        return $res->getBody();
    }
}

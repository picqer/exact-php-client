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
     * @return mixed Binary representation of file
     */
    public function download()
    {
        $client = new Client();

        if ($this->Url) {
            $uri = $this->Url . '&Download=1';
        } elseif ($this->PictureUrl) {
            $uri = $this->PictureUrl;
        }

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Prefer' => 'return=representation',
            'Authorization' => 'Bearer ' . $this->connection()->getAccessToken(),
        ];

        $res = $client->get($uri, [
          'headers' => $headers
        ]);

        return $res->getBody();
    }
}

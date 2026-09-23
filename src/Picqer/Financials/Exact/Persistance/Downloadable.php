<?php

namespace Picqer\Financials\Exact\Persistance;

use Picqer\Financials\Exact\ApiException;
use Picqer\Financials\Exact\Connection;
use Psr\Http\Message\StreamInterface;

trait Downloadable
{
    abstract public function connection(): Connection;

    abstract public function getDownloadUrl(): string;

    /**
     * @throws ApiException
     */
    public function download(): StreamInterface
    {
        return $this->connection()->downloadFile($this->getDownloadUrl());
    }
}

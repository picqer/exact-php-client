<?php

namespace Picqer\Laravel\Exact\Providers;

use Illuminate\Support\ServiceProvider;
use Picqer\Financials\Exact\Connection;
use Picqer\Laravel\Exact\Connection as LaravelConnection;

class ExactServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->alias(LaravelConnection::class, Connection::class);
        
        // todo: implement routes and migrations for authentication with Exact..
    }

}
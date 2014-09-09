<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

// Load config
Dotenv::load(__DIR__);

Dotenv::required(array('EXACT_CLIENT_SECRET', 'EXACT_CLIENT_ID'));

$provider = new Picqer\OAuth2\Client\Provider\Exact([
    'clientId' => getenv('EXACT_CLIENT_ID'),
    'clientSecret' => getenv('EXACT_CLIENT_SECRET'),
    'redirectUri' => "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
]);

if ( ! isset($_GET['code']))
{

    header('Location: ' . $provider->getAuthorizationUrl());
    echo 'redirecting';
    exit;
} else
{

    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);
}

echo 'Access token: ' .$token->accessToken . '<br><br>';

echo 'Refresh token: ' .$token->refreshToken. '<br><br>';

echo 'Expires: ' .$token->expires. '<br><br>';
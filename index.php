<?php

// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoload
require 'vendor/autoload.php';

// Load config
Dotenv::load(__DIR__);
Dotenv::required(array('EXACT_CLIENT_SECRET', 'EXACT_CLIENT_ID'));

$exact = new \Picqer\Financials\Exact(new \Guzzle\Http\Client(), new \CommerceGuys\Guzzle\Plugin\Oauth2\Oauth2Plugin());

if (isset($_GET['code']))
{
    $exact->setOauth2Params(
        $_GET['code'],
        'http://exact-php-client.vagrant.logict.net/index.php',
        getenv('EXACT_CLIENT_ID'),
        getenv('EXACT_CLIENT_SECRET')
    );

    $_SESSION['accessToken'] = $exact->getAccessToken();
    $_SESSION['refreshToken'] = $exact->getRefreshToken();

}

if (isset($_GET['auth']))
{
    header('Location: ' . $exact->getAuthUrl(
            getenv('EXACT_CLIENT_ID'),
            'http://exact-php-client.vagrant.logict.net/index.php'
        )
    );
    exit;
}

echo 'Ready! Proceeding: <br><br>';

echo 'Ready! Proceeding: '.$exact->getAccessToken().'<br><br>';
echo 'Ready! Proceeding: '.$exact->getAccessToken().'<br><br>';

echo '<pre>';
echo print_r($exact->me()['d']['results'], true);
echo '</pre>';

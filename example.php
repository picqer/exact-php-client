<?php

require 'vendor/autoload.php';

function getValue($key)
{
    $storage = json_decode(file_get_contents('storage.json'), true);
    if (array_key_exists($key, $storage)) {
        return $storage[$key];
    }
    return null;
}

function setValue($key, $value)
{
    $storage       = json_decode(file_get_contents('storage.json'), true);
    $storage[$key] = $value;
    file_put_contents('storage.json', json_encode($storage));
}

function authorize()
{
    $connection = new \Picqer\Financials\Exact\Connection();
    $connection->setRedirectUrl('YOUR_REDIRECT_URL');
    $connection->setExactClientId('YOUR_CLIENT_ID');
    $connection->setExactClientSecret('YOUR_CLIENT_SECRET');
    $connection->redirectForAuthorization();
}

function connect()
{
    $connection = new \Picqer\Financials\Exact\Connection();
    $connection->setRedirectUrl('YOUR_REDIRECT_URL');
    $connection->setExactClientId('YOUR_CLIENT_ID');
    $connection->setExactClientSecret('YOUR_CLIENT_SECRET');

    if (getValue('authorizationcode')) // Retrieves authorizationcode from database
    {
        $connection->setAuthorizationCode(getValue('authorizationcode'));
    }

    if (getValue('accesstoken')) // Retrieves accesstoken from database
    {
        $connection->setAccessToken(getValue('accesstoken'));
    }

    if (getValue('refreshtoken')) // Retrieves refreshtoken from database
    {
        $connection->setRefreshToken(getValue('refreshtoken'));
    }

    if (getValue('expires_in')) // Retrieves expires from database
    {
        $connection->setTokenExpires(getValue('expires_in'));
    }

    // Make the client connect and exchange tokens
    try {
        $connection->connect();
    } catch (\Exception $e) {
        throw new Exception('Could not connect to Exact: ' . $e->getMessage());
    }

    // Save the new tokens for next connections
    setValue('accesstoken', $connection->getAccessToken());
    setValue('refreshtoken', $connection->getRefreshToken());
    setValue('expires_in', $connection->getTokenExpires());

    return $connection;
}

if (isset($_GET['code']) && is_null(getValue('authorizationcode'))) {
    setValue('authorizationcode', $_GET['code']);
}

$connection = connect();

try {
    $journals = new \Picqer\Financials\Exact\Journal($connection);
    $result   = $journals->get();
    foreach ($result as $journal) {
        echo 'journal: ' . $journal->Description . '<br>';
    }

    echo 'done';
} catch (\Exception $e) {
    echo get_class($e) . ' : ' . $e->getMessage();
}

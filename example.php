<?php

require 'vendor/autoload.php';

function getValue($key)
{
    $storage = json_decode(file_get_contents('storage.txt'), true);
    if (array_key_exists($key, $storage)) return $storage[$key];
    return null;
}

function setValue($key, $value)
{
    $storage = json_decode(file_get_contents('storage.txt'), true);
    $storage[$key] = $value;
    file_put_contents('storage.txt', json_encode($storage));
}

function authorize()
{
    $connection = new \Picqer\Financials\Exact\Connection();
    $connection->setRedirectUrl('URL');
    $connection->setExactClientId('CLIENTID');
    $connection->setExactClientSecret('SECRET');
    $connection->redirectForAuthorization();
}

function connect()
{
    $connection = new \Picqer\Financials\Exact\Connection();
    $connection->setRedirectUrl('URL');
    $connection->setExactClientId('CLIENTID');
    $connection->setExactClientSecret('SECRET');

    if (getValue('authorizationcode')) // Retrieves authorizationcode from database
        $connection->setAuthorizationCode(getValue('authorizationcode'));

    if (getValue('accesstoken')) // Retrieves accesstoken from database
        $connection->setAccessToken(unserialize(getValue('accesstoken')));

    if (getValue('refreshtoken')) // Retrieves refreshtoken from database
        $connection->setRefreshToken(getValue('refreshtoken'));

    // Make the client connect and exchange tokens
    try {
        $connection->client();
    } catch (\Exception $e)
    {
        throw new Exception('Could not connect to Exact: ' . $e->getMessage());
    }

    // Save the new tokens for next connections
    setValue('accesstoken', serialize($connection->getAccessToken()));
    setValue('refreshtoken', $connection->getRefreshToken());

    return $connection;
}

if (isset($_GET['code']) && is_null(getValue('authorizationcode')))
{
    setValue('authorizationcode', $_GET['code']);
}

if (is_null(getValue('authorizationcode')))
{
    authorize();
    exit;
} else {
    $connection = connect();
}

$journals = new \Picqer\Financials\Exact\Journal($connection);
$result = $journals->get();
foreach ($result as $journal)
{
    echo 'journal: ' . $journal->Description . '<br>';
}

echo 'done';

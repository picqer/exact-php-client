<?php

// Autoload composer installed libraries
require __DIR__ . '/../vendor/autoload.php';

/**
 * Function to retrieve persisted data for the example
 * @param string $key
 * @return null|string
 */
function getValue($key)
{
    $storage = json_decode(file_get_contents('storage.json'), true);
    if (array_key_exists($key, $storage)) {
        return $storage[$key];
    }
    return null;
}

/**
 * Function to persist some data for the example
 * @param string $key
 * @param string $value
 */
function setValue($key, $value)
{
    $storage       = json_decode(file_get_contents('storage.json'), true);
    $storage[$key] = $value;
    file_put_contents('storage.json', json_encode($storage));
}

/**
 * Function to authorize with Exact, this redirects to Exact login promt and retrieves authorization code
 * to set up requests for oAuth tokens
 */
function authorize()
{
    $connection = new \Picqer\Financials\Exact\Connection();
    $connection->setRedirectUrl('__REDIRECT_URL__');
    $connection->setExactClientId('__CLIENT_ID__');
    $connection->setExactClientSecret('__CLIENT_SECRET__');
    $connection->redirectForAuthorization();
}

/**
 * Function to connect to Exact, this creates the client and automatically retrieves oAuth tokens if needed
 *
 * @return \Picqer\Financials\Exact\Connection
 * @throws Exception
 */
function connect()
{
    $connection = new \Picqer\Financials\Exact\Connection();
    $connection->setRedirectUrl('__REDIRECT_URL__');
    $connection->setExactClientId('__CLIENT_ID__');
    $connection->setExactClientSecret('__CLIENT_SECRET__');

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

    // Make the client connect and exchange tokens
    try {
        $connection->client();
    } catch (\Exception $e) {
        throw new Exception('Could not connect to Exact: ' . $e->getMessage());
    }

    // Save the new tokens for next connections
    setValue('accesstoken', $connection->getAccessToken());
    setValue('refreshtoken', $connection->getRefreshToken());

    return $connection;
}

// If authorization code is returned from Exact, save this to use for token request
if (isset($_GET['code']) && is_null(getValue('authorizationcode'))) {
    setValue('authorizationcode', $_GET['code']);
}

// If we do not have a authorization code, authorize first to setup tokens
if (getValue('authorizationcode') === null) {
    authorize();
}

// Create the Exact client
$connection = connect();

// Get the journals from our administration
try {
    $journals = new \Picqer\Financials\Exact\Journal($connection);
    $result   = $journals->get();
    foreach ($result as $journal) {
        echo 'Journal: ' . $journal->Description . '<br>';
    }
} catch (\Exception $e) {
    echo get_class($e) . ' : ' . $e->getMessage();
}
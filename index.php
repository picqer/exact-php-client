<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('STORAGE', __DIR__ . '/storage.db');

// Autoload
require 'vendor/autoload.php';

// Load config
Dotenv::load(__DIR__);
Dotenv::required(array('EXACT_CLIENT_SECRET', 'EXACT_CLIENT_ID'));

// Setup connnection
$connection = new \Picqer\Financials\Exact\Connection();
$connection->setRedirectUrl('http://exact-php-client.vagrant.logict.net/index.php');
$connection->setExactClientId(getenv('EXACT_CLIENT_ID'));
$connection->setExactClientSecret(getenv('EXACT_CLIENT_SECRET'));
if (isset($_GET['code'])) $connection->setAuthorizationCode($_GET['code']);
if ($connection->needsAuthentication()) $connection->redirectForAuthorization();


/*
$item = new \Picqer\Financials\Exact\Item($connection);
$item->Code = 'PRODUCT002';
$item->CostPriceStandard = 5.12;
$item->Description = 'Our number 1 product';
$item->IsSalesItem = true;
$item->save();
*/

$salesInvoice = new \Picqer\Financials\Exact\SalesInvoice($connection);
$salesInvoice->InvoiceTo = 'f254322c-2adb-4bd2-a564-df82abfb2ba8'; // Picqer
$salesInvoice->OrderedBy = 'f254322c-2adb-4bd2-a564-df82abfb2ba8'; // Picqer
$salesInvoice->YourRef = 'ORDER2014-12312';
$salesInvoice->SalesInvoiceLines = [
    [
        'Item' => 'e7d25dcd-2069-487a-b521-c7e89a016a0a',
        'Quantity' => 3
    ]
];
$salesInvoice->save();



echo '<pre>';

echo 'done';

//echo var_dump($vatcodes);

echo '</pre>';

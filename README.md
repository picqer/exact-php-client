# Exact Online PHP client

[![Tests](https://github.com/picqer/exact-php-client/actions/workflows/phpunit.yml/badge.svg)](https://github.com/picqer/exact-php-client/actions/workflows/phpunit.yml)
[![Latest version](https://img.shields.io/packagist/v/picqer/exact-php-client)](https://packagist.org/packages/picqer/exact-php-client)
[![Downloads](https://img.shields.io/packagist/dt/picqer/exact-php-client)](https://packagist.org/packages/picqer/exact-php-client)

A PHP client for the [Exact Online REST API](https://start.exactonline.nl/docs/HlpRestAPIResources.aspx?SourceAction=10). Use it to create invoices, book journal entries, sync items, stock and relations, and anything else the API offers.

The client follows the naming of the Exact Online API. Every endpoint is a class with the same name, and every field has the same name as in the API. The [Exact API reference](https://start.exactonline.nl/docs/HlpRestAPIResources.aspx?SourceAction=10) is therefore also the reference for this library.

Created and maintained by [Picqer](https://picqer.com).

## Contents

- [Installation](#installation)
- [Quick start](#quick-start)
- [Authentication](#authentication)
- [Divisions (administrations)](#divisions-administrations)
- [Other countries](#other-countries)
- [Reading data](#reading-data)
- [Creating, updating and deleting](#creating-updating-and-deleting)
- [Related data and files](#related-data-and-files)
- [Examples](#examples)
- [Rate limits](#rate-limits)
- [Error handling](#error-handling)
- [Webhooks](#webhooks)
- [Troubleshooting](#troubleshooting)
- [Versions and upgrading](#versions-and-upgrading)
- [Contributing](#contributing)

## Installation

```bash
composer require picqer/exact-php-client
```

Requires PHP 7.4 or higher and Guzzle 7.15.2 or higher.

## Quick start

1. Create an app in the [Exact Online App Center](https://apps.exactonline.com) to get a **client ID** and **client secret**, and set the **redirect URL** to a page of your application.
2. Send the user to Exact to authorize your app. Exact redirects back to your redirect URL with an authorization code.
3. Exchange the code for tokens, store them, and start calling the API.

Once you have tokens, using the API looks like this:

```php
use Picqer\Financials\Exact\Connection;
use Picqer\Financials\Exact\Item;

$connection = new Connection();
$connection->setRedirectUrl('https://example.com/exact/callback');
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');
$connection->setAccessToken($storedAccessToken);
$connection->setRefreshToken($storedRefreshToken);
$connection->setTokenExpires($storedTokenExpires);
$connection->setTokenUpdateCallback(function (Connection $connection) {
    // Store the new tokens, see "Authentication" below
});
$connection->setDivision(123456);

$items = (new Item($connection))->filter('IsSalesItem eq 1');

foreach ($items as $item) {
    echo $item->Code . ': ' . $item->Description . PHP_EOL;
}
```

A complete, runnable version of the authorization flow is in [example/example.php](example/example.php).

## Authentication

Exact Online uses OAuth 2.0. A user only needs to authorize your app once. After that, the library keeps the connection alive with the refresh token.

### 1. Redirect the user to Exact

```php
$connection = new Connection();
$connection->setRedirectUrl('https://example.com/exact/callback'); // Same as in the App Center
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');
$connection->setState($state); // Random value, verify it in your callback to prevent CSRF
$connection->redirectForAuthorization(); // Sends a redirect header and exits
```

Use `$connection->getAuthUrl()` instead if you want to do the redirect yourself. Use `setForceLogin(true)` to always show Exact's login screen.

### 2. Handle the callback

Exact redirects back to your redirect URL with a `code` query parameter. The code can only be used **once**, so exchange it for tokens right away:

```php
$connection = new Connection();
$connection->setRedirectUrl('https://example.com/exact/callback');
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');
$connection->setAuthorizationCode($_GET['code']);
$connection->connect(); // Exchanges the code for tokens

storeTokens(
    $connection->getAccessToken(),
    $connection->getRefreshToken(),
    $connection->getTokenExpires()
);
```

### 3. Connect with stored tokens

For every later request, create the connection from your stored tokens:

```php
$connection = new Connection();
$connection->setRedirectUrl('https://example.com/exact/callback');
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');
$connection->setAccessToken($tokens['access_token']);
$connection->setRefreshToken($tokens['refresh_token']);
$connection->setTokenExpires($tokens['expires']); // Unix timestamp

// Required: store new tokens whenever the library refreshes them
$connection->setTokenUpdateCallback(function (Connection $connection) {
    storeTokens(
        $connection->getAccessToken(),
        $connection->getRefreshToken(),
        $connection->getTokenExpires()
    );
});
```

The access token is valid for about 10 minutes. The library refreshes it automatically just before it expires, using the refresh token.

> [!IMPORTANT]
> **Always set the token update callback.** Every refresh gives you a new refresh token and invalidates the old one. If you don't store the new refresh token, your next connection uses an invalid token, and the user has to authorize your app again.

### Refreshing tokens from multiple processes

If several processes (queue workers, cron jobs, web requests) share the same tokens, two of them can refresh at the same time. One of them then ends up with an invalidated refresh token. Prevent this with a lock around the refresh:

```php
$connection->setAcquireAccessTokenLockCallback(function (Connection $connection) {
    $lock->acquire(); // e.g. a Redis or database lock
});

$connection->setRefreshAccessTokenCallback(function (Connection $connection) {
    // Called after acquiring the lock: another process may have refreshed the tokens in the meantime.
    // Load them from storage. If they are still valid, the library uses them instead of refreshing again.
    $tokens = loadTokens();
    $connection->setAccessToken($tokens['access_token']);
    $connection->setRefreshToken($tokens['refresh_token']);
    $connection->setTokenExpires($tokens['expires']);
});

$connection->setAcquireAccessTokenUnlockCallback(function (Connection $connection) {
    $lock->release(); // Also called when refreshing fails
});
```

## Divisions (administrations)

Almost every endpoint works within one division (administration). Set it explicitly:

```php
$connection->setDivision(123456);
```

If you don't, the library asks Exact for the user's current division on every new connection. That costs an extra API call, and the result changes when the user switches administrations in Exact Online.

List the divisions the user has access to with the `Division` entity (`system/Divisions`), or all divisions of the license with `AllDivision` (`system/AllDivisions`).

## Other countries

The library connects to the Dutch Exact Online site by default. For other countries, set the base URL **before** authorizing:

```php
$connection->setBaseUrl('https://start.exactonline.be');
```

| Country | Base URL |
| --- | --- |
| Netherlands | `https://start.exactonline.nl` |
| Belgium | `https://start.exactonline.be` |
| Germany | `https://start.exactonline.de` |
| United Kingdom | `https://start.exactonline.co.uk` |
| United States | `https://start.exactonline.com` |
| Spain | `https://start.exactonline.es` |
| France | `https://start.exactonline.fr` |

## Reading data

Every endpoint is a class in `Picqer\Financials\Exact`. See [src/Picqer/Financials/Exact](src/Picqer/Financials/Exact) for the full list.

```php
use Picqer\Financials\Exact\Item;

// One record by its primary key
$item = (new Item($connection))->find('097a82a9-6ef7-4edc-8036-3f7559d9ef82');

// The first record that matches a filter, or null
$item = (new Item($connection))->first("Code eq 'ITEM-001'");

// All records (the library follows the pages for you)
$items = (new Item($connection))->get();

// Records that match an OData filter
$items = (new Item($connection))->filter("IsSalesItem eq 1 and Code eq 'ITEM-001'");

// The ID of the record with a given code, or null
$id = (new Item($connection))->findId('ITEM-001');
```

`find()`, `first()`, `get()` and `filter()` return new objects. They don't fill the object you call them on.

### Filter options

```php
$items = (new Item($connection))->filter(
    'IsSalesItem eq 1',                    // $filter
    '',                                    // $expand: related collections to include
    'ID,Code,Description',                 // $select: only fetch these fields
    ['$orderby' => 'Code'],                // Other OData options, like $orderby or $top
    ['CustomDescriptionLanguage' => 'NL']  // Extra headers, e.g. the language of descriptions
);
```

Filters use the [OData syntax](https://www.odata.org/documentation/odata-version-2-0/uri-conventions/) that Exact Online supports. Write GUIDs as `guid'…'` and strings as `'…'`. The Filter column in the API reference shows which fields you can filter on.

### Large data sets

A regular endpoint returns 60 records per page. `get()` and `filter()` fetch all pages, which can take a lot of memory. Use the generator variants to handle records one at a time:

```php
foreach ((new Item($connection))->filterAsGenerator('IsSalesItem eq 1') as $item) {
    // Only the current page is kept in memory
}
```

`getAsGenerator()` works the same way. To control the paging yourself, for example to spread requests over time:

```php
$resultSet = (new Item($connection))->getResultSet(['$select' => 'ID,Code']);

while ($resultSet->hasMore()) {
    $items = $resultSet->next(); // One page
}
```

### Sync and bulk endpoints

For large data sets, Exact recommends the sync and bulk endpoints. They return 1000 records per page.

**Sync endpoints** (classes named `Sync…`) return records that are new or changed since a given `Timestamp`. Store the highest `Timestamp` you've seen and continue from there next time. The timestamp is a row version, not a date.

```php
use Picqer\Financials\Exact\SyncItem;

$lastTimestamp = 1; // Start with 1 for the first sync

foreach ((new SyncItem($connection))->filterAsGenerator("Timestamp gt {$lastTimestamp}") as $item) {
    // Process $item
    $lastTimestamp = max($lastTimestamp, $item->Timestamp);
}
```

Deleted records are available through `SyncDeleted`.

**Bulk endpoints** (classes named `Bulk…`) require you to select the fields you need:

```php
use Picqer\Financials\Exact\BulkItem;

$items = (new BulkItem($connection))->filter('', '', 'ID,Code,Description');
```

## Creating, updating and deleting

Set fields as properties and call `save()`. A record without a primary key is created (`POST`), a record with one is updated (`PUT`). After saving, the object contains the record as Exact returned it, including the new ID.

```php
use Picqer\Financials\Exact\Account;

$account = new Account($connection);
$account->Code = 'CUST-001';
$account->Name = 'Customer name';
$account->City = 'Amsterdam';
$account->Country = 'NL';
$account->IsSales = true;
$account->Status = 'C'; // Customer
$account->save();

echo $account->ID;

// Update
$account->City = 'Rotterdam';
$account->save();

// Delete
$account->delete();
```

Only fields that exist in the API are sent. Unknown properties are ignored.

### Records with lines

Some endpoints, like sales invoices and sales orders, need their lines in the same request when you create them:

```php
use Picqer\Financials\Exact\SalesInvoice;

$salesInvoice = new SalesInvoice($connection);
$salesInvoice->InvoiceTo = $account->ID;
$salesInvoice->OrderedBy = $account->ID;
$salesInvoice->YourRef = 'Order 1001';
$salesInvoice->SalesInvoiceLines = [
    ['Item' => $itemId, 'Quantity' => 2, 'UnitPrice' => 12.50],
    ['Item' => $otherItemId, 'Quantity' => 1],
];
$salesInvoice->save();
```

Lines are only sent when creating a record. To change the lines of an existing record, use the line endpoint, such as `SalesInvoiceLine`.

## Related data and files

### Related collections

Related collections such as `SalesInvoiceLines` are loaded the first time you use them:

```php
$salesInvoice = (new SalesInvoice($connection))->find($invoiceId);

foreach ($salesInvoice->SalesInvoiceLines as $line) { // Fetched now
    echo $line->Description;
}
```

That is an extra API call per record. When you need the lines of many records, include them in the same request with `$expand`:

```php
$invoices = (new SalesInvoice($connection))->filter("InvoiceDate ge datetime'2026-01-01'", 'SalesInvoiceLines');
```

If loading fails, for example because of a rate limit, an `ApiException` is thrown.

### Downloading files

Items and document attachments can be downloaded:

```php
$item = (new Item($connection))->find($itemId);
$picture = $item->download(); // Psr\Http\Message\StreamInterface

file_put_contents('picture.jpg', (string) $picture);
```

## Examples

### Create, print and email a sales invoice

```php
use Picqer\Financials\Exact\PrintedSalesInvoice;
use Picqer\Financials\Exact\SalesInvoice;

$salesInvoice = new SalesInvoice($connection);
$salesInvoice->InvoiceTo = $customerId;
$salesInvoice->OrderedBy = $customerId;
$salesInvoice->SalesInvoiceLines = [
    ['Item' => $itemId, 'Quantity' => 1],
];
$salesInvoice->save();

$printedInvoice = new PrintedSalesInvoice($connection);
$printedInvoice->InvoiceID = $salesInvoice->InvoiceID;
$printedInvoice->DocumentLayout = $documentLayoutId;
$printedInvoice->SendEmailToCustomer = true;
$printedInvoice->SenderEmailAddress = 'invoices@example.com';
$printedInvoice->ExtraText = 'Thank you for your order.';
$printedInvoice->save();
```

### Invoice sales orders (async)

As of October 2026 Exact only supports the async mode of the InvoiceSalesOrders endpoint. Starting the process returns a `ProcessID`, which you use to fetch the result later.

```php
use Picqer\Financials\Exact\InvoiceSalesOrder;
use Picqer\Financials\Exact\InvoiceSalesOrderResult;
use Picqer\Financials\Exact\SalesOrderID;

$invoiceSalesOrder = new InvoiceSalesOrder($connection);
$invoiceSalesOrder->CreateMode = 1; // 0: Per customer, 1: Per sales order
$invoiceSalesOrder->InvoiceMode = 0; // 0: By quantity delivered, 1: By quantity ordered
$invoiceSalesOrder->JournalCode = '70';
$invoiceSalesOrder->Mode = 1; // Async
$invoiceSalesOrder->SalesOrderIDs = [
    new SalesOrderID($connection, ['ID' => $salesOrderId]),
];
$invoiceSalesOrder->save();

$processId = $invoiceSalesOrder->ProcessID; // Store this

// Later, e.g. in a queued job:
$result = (new InvoiceSalesOrderResult($connection))->findByProcessId($processId);

if ($result !== null) {
    echo $result->Status;
    echo $result->NumberOfCreatedInvoices;
    echo $result->NumberOfFailedInvoices;
    echo $result->Errors;
}
```

## Rate limits

Exact Online limits the number of API calls per division, per minute and per day. The limits depend on your agreement with Exact. See [API limits](https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Simulation-gen-apilimits) in Exact's documentation.

After each request, the connection holds the current limits from the response headers:

```php
$connection->getDailyLimit();
$connection->getDailyLimitRemaining();
$connection->getDailyLimitReset();     // Unix timestamp in milliseconds
$connection->getMinutelyLimit();
$connection->getMinutelyLimitRemaining();
$connection->getMinutelyLimitReset();  // Unix timestamp in milliseconds
```

When you exceed the minutely limit, Exact only sends the minutely headers. The daily values are then `0` until the next minute.

The library can wait automatically when the minutely limit is reached:

```php
$connection->setWaitOnMinutelyRateLimitHit(true);
```

The daily limit is not handled automatically. When you reach it, an `ApiException` with code `429` is thrown. Wait until `getDailyLimitReset()` before trying again.

## Error handling

Every error is thrown as a `Picqer\Financials\Exact\ApiException`. For HTTP errors, the exception code is the HTTP status code, and the message contains Exact's error message.

```php
use Picqer\Financials\Exact\ApiException;

try {
    $account->save();
} catch (ApiException $e) {
    switch ($e->getCode()) {
        case 400: // Invalid request, e.g. a missing mandatory field. See $e->getMessage()
        case 401: // The access token was rejected
        case 403: // No access to this endpoint or division
        case 429: // Rate limit reached, try again later
        default:
            throw $e;
    }
}
```

If refreshing the tokens fails because the refresh token is no longer valid, you get an `ApiException` with code `400` and `invalid_grant` in the message. The user then has to authorize your app again.

Connection problems, like DNS errors and timeouts, are also thrown as `ApiException`, with code `0`. The original exception is available through `$e->getPrevious()`.

To log every request and response, add a Guzzle middleware:

```php
$connection->insertMiddleWare(\GuzzleHttp\Middleware::log($logger, new \GuzzleHttp\MessageFormatter()));
```

## Webhooks

Subscribe to changes with the `WebhookSubscription` entity:

```php
use Picqer\Financials\Exact\WebhookSubscription;

$subscription = new WebhookSubscription($connection);
$subscription->CallbackURL = 'https://example.com/exact/webhook';
$subscription->Topic = 'SalesOrders';
$subscription->save();
```

Check that incoming webhook calls come from Exact with the `Authenticatable` trait and your webhook secret from the App Center:

```php
use Picqer\Financials\Exact\Webhook\Authenticatable;

class ExactWebhookHandler
{
    use Authenticatable;
}

$isValid = (new ExactWebhookHandler())->authenticate(file_get_contents('php://input'), 'WEBHOOK_SECRET');
```

## Troubleshooting

### Error 400: Please add a $select or a $top=1 statement to the query string

Some endpoints require you to limit the fields or the number of records. Select the fields you need, or request one record:

```php
$entries = (new GeneralJournalEntry($connection))->filter('', '', 'EntryID,FinancialYear');
$entries = (new GeneralJournalEntry($connection))->filter('', '', '', ['$top' => 1]);
```

### Error 400 when exchanging the authorization code

An authorization code can only be used once. If you exchange the same code again, Exact responds with `400 Bad Request`. Exchange the code once, store the tokens, and connect with the stored tokens from then on.

### Error 400 with invalid_grant after some time

The refresh token is no longer valid. This usually happens when a new refresh token wasn't stored after a refresh (see [Connect with stored tokens](#3-connect-with-stored-tokens)), or when two processes refreshed at the same time (see [Refreshing tokens from multiple processes](#refreshing-tokens-from-multiple-processes)). The user has to authorize your app again.

### A field isn't saved

Check that the field exists in the API reference of the endpoint. The library only sends fields it knows about. If the field is missing from the entity class, please open a pull request.

### Server maintenance

Exact Online is unavailable for maintenance every day between 04:00 and 04:30 CET. Avoid scheduling API calls in that window.

## Versions and upgrading

| Version | PHP | Guzzle |
| --- | --- | --- |
| 4.8 and higher | 7.4 or higher | 7.15.2 or higher |
| 4.0 – 4.7 | 7.4 or higher | 6 or 7 |
| 3.x | 7.2 or higher | 6 or 7 |
| 1.x | | 3 |

Changes that can affect your code are listed under "Behaviour changes" in the [release notes](https://github.com/picqer/exact-php-client/releases). For example:
- **4.7:** lazy loading and `download()` throw an `ApiException` instead of failing silently or throwing Guzzle exceptions.
- **4.8:** Guzzle 7.15.2 or higher is required.

## Contributing

Pull requests are welcome, especially for missing endpoints and fields. Please add tests for your changes and make sure these pass:

```bash
composer install
vendor/bin/phpunit
vendor/bin/phpstan
```

Entities are generated from the Exact Online API reference, using [DannyvdSluijs/PicqerExactPhpClientGenerator](https://github.com/DannyvdSluijs/PicqerExactPhpClientGenerator).

## License

MIT. See [LICENSE](LICENSE).

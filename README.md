# Exact PHP Client
![Run phpunit](https://github.com/picqer/exact-php-client/workflows/Run%20phpunit/badge.svg)

PHP client library for the Exact Online API. This client lets you integrate with Exact Online, for example by:
- creating and sending invoices, 
- add journal entries, 
- or upload received invoices.

This client uses the same naming and conventions as the Exact API itself, so best way to find out how this client works is by [looking at the Exact Online documentation](https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Content-restrefdocs) and [API reference](https://start.exactonline.nl/docs/HlpRestAPIResources.aspx?SourceAction=10).

This library is created and maintained by [Picqer](https://picqer.com). We are [looking for PHP developers to join our team](https://picqer.com/nl/vacatures/senior-php-developer)!

## Composer install
Installing this Exact client for PHP can be done through Composer.

```
composer require picqer/exact-php-client
```

## Usage

1. Set up app at Exact App Center to retrieve credentials
2. Authorize the integration from your app
3. Parse callback and finish connection set up
4. Use the library to do stuff

Steps 1 - 3 are only required once on set up.

### Set up app at Exact App Center to retrieve credentials

Set up an App at the Exact App Center to retrieve your `Client ID` and `Client Secret`.
You will also need to set the correct `Callback URL` for the oAuth dance to work.

### Authorize the integration from your app

The code below is an example `authorize()` function.

```php
$connection = new \Picqer\Financials\Exact\Connection();
$connection->setRedirectUrl('CALLBACK_URL'); // Same as entered online in the App Center
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');
$connection->redirectForAuthorization();
```

This will redirect the user to Exact to login and authorize your integration with their account.

### Parse callback and finish connection set up

Exact will redirect back to the `callback url` you provided. The callback will receive a `code` param. 
This is the authorization code for oAuth. Store this code.

Make a new connection to Exact so the library can exchange codes and fetch the `accesstoken` and `refreshtoken`.
The `accesstoken` is a temporary token which allows for communication between your app and Exact.
The `refreshtoken` is a token which is used to get a new `accesstoken` which also refreshes the `refreshtoken`. 
The library will settle all of this for you. The code below could be an general `connect()` function, which returns
the api connection.

```php
$connection = new \Picqer\Financials\Exact\Connection();
$connection->setRedirectUrl('CALLBACK_URL');
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');

if (getValue('authorizationcode')) {
    // Retrieves authorizationcode from database
    $connection->setAuthorizationCode(getValue('authorizationcode'));
}

if (getValue('accesstoken')) {
    // Retrieves accesstoken from database
    $connection->setAccessToken(unserialize(getValue('accesstoken')));
}

if (getValue('refreshtoken')) {
    // Retrieves refreshtoken from database
    $connection->setRefreshToken(getValue('refreshtoken'));
}

if (getValue('expires_in')) {
    // Retrieves expires timestamp from database
    $connection->setTokenExpires(getValue('expires_in'));
}

// Make the client connect and exchange tokens
try {
    $connection->connect();
} catch (\Exception $e)
{
    throw new Exception('Could not connect to Exact: ' . $e->getMessage());
}

// Save the new tokens for next connections
setValue('accesstoken', serialize($connection->getAccessToken()));
setValue('refreshtoken', $connection->getRefreshToken());

// Optionally, save the expiry-timestamp. This prevents exchanging valid tokens (ie. saves you some requests)
setValue('expires_in', $connection->getTokenExpires());

// Optionally, set the lock and unlock callbacks to prevent multiple request for acquiring a new refresh token with the same refresh token.
$connection->setAcquireAccessTokenLockCallback('CALLBACK_FUNCTION');
$connection->setAcquireAccessTokenUnlockCallback('CALLBACK_FUNCTION');
```

### About divisions (administrations)

By default the library will use the default administration of the user. This means that when the user switches administrations in Exact Online. The library will also start working with this administration.

### Rate limits
Exact uses a minutely and daily rate limit. There are a maximum number of calls per day you can do per company, and to prevent bursting they have also implemented a limit per minute. This PR stores this information in the `Connection` and adds methods to read the rate limits so you can handle these as appropriate for your app.
Exact documentation on rate limits is found here: https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Simulation-gen-apilimits

If you hit a rate limit, an `ApiException` will be thrown with code 429. At that point you can determine whether you've hit the minutely or the daily limit. If you've hit the minutely limit, try again after 60 seconds. If you've hit the daily limit, try again after the daily reset.

You can use the following methods on the `Connection`, which will return the limits after your first API call (based on the headers from Exact).

```php
$connection->getDailyLimit(); // Retrieve your daily limit
$connection->getDailyLimitRemaining(); // Retrieve the remaining amount of API calls for this day
$connection->getDailyLimitReset(); // Retrieve the timestamp for when the limit will reset
$connection->getMinutelyLimit(); // Retrieve your limit per minute
$connection->getMinutelyLimitRemaining(); // Retrieve the amount of API calls remaining for this minute
$connection->getMinutelyLimitReset(); // Retrieve the timestamp for when the minutely limit will reset
```
_Do note when you have no more minutely calls available, Exact only sends the Minutely Limit headers. So in that case, the Daily Limit headers will remain 0 until the minutely reset rolls over._

There is basic support to `sleep` upon hitting the minutely rate limits. If you enable "Wait on minutely rate limit hit", the client will sleep until the limit is reset. Daily limits are not considered.

```php
$connection->setWaitOnMinutelyRateLimitHit(true);
```

### Use the library to do stuff (examples)

```php
// Optionally set administration, otherwise use the current administration of the user
$connection->setDivision(123456);

// Create a new account
$account = new \Picqer\Financials\Exact\Account($connection);
$account->AddressLine1 = 'Customers address line';
$account->AddressLine2 = 'Customer address line 2';
$account->City = 'Customer city';
$account->Code = 'Customer code';
$account->Country = 'Customer country';
$account->IsSales = 'true';
$account->Name = 'Customer name';
$account->Postcode = 'Customer postcode';
$account->Status = 'C';
$account->save();

// Add a product in Exact
$item = new \Picqer\Financials\Exact\Item($connection);
$item->Code = 'product code';
$item->CostPriceStandard = 2.50;
$item->Description = 'product description';
$item->IsSalesItem = true;
$item->SalesVatCode = 'VH';
$item->save();

// Retrieve an item by id
$item = new \Picqer\Financials\Exact\Item($connection);
$id = '097A82A9-6EF7-4EDC-8036-3F7559D9EF82';
$item->find($id);

// List items
$item = new \Picqer\Financials\Exact\Item($connection);
$item->get();

// List items with filter (using a filter always returns a collection) and loop through the result
$item = new \Picqer\Financials\Exact\Item($connection);
$items = $item->filter("Code eq '$item->Code'"); // Uses filters as described in Exact API docs (odata filters)
foreach($items as $itemObject){
    $attrs = (array) $itemObject->attributes(); // Turns the endpoint properties into an array
    $picture = $itemObject->download();         // Fetches an image string instead of the url
    // Do something with $attrs and or $picture, e.g. imagecreatefromstring($picture) 
}

// Create new invoice with invoice lines
$invoiceLines[] = [
    'Item'      => $item->ID,
    'Quantity'  => 1,
    'UnitPrice' => $item->CostPriceStandard
];

$salesInvoice = new \Picqer\Financials\Exact\SalesInvoice($connection);
$salesInvoice->InvoiceTo = $account->ID;
$salesInvoice->OrderedBy = $account->ID;
$salesInvoice->YourRef = 'Invoice reference';
$salesInvoice->SalesInvoiceLines = $invoiceLines;
$salesInvoice->save();

// Print and email the invoice
$printedInvoice = new \Picqer\Financials\Exact\PrintedSalesInvoice($connection);
$printedInvoice->InvoiceID = $salesInvoice->InvoiceID;
$printedInvoice->SendEmailToCustomer = true;
$printedInvoice->SenderEmailAddress = "from@example.com";
$printedInvoice->DocumentLayout = "401f3020-35cd-49a2-843a-d904df0c09ff";
$printedInvoice->ExtraText = "Some additional text";
$printedInvoice->save();
```

### Use generators to prevent memory overflow
This package allows you to interact with the Exact API using PHP [generators](https://www.php.net/manual/en/language.generators.overview.php).
This may be useful when you're retrieving large sets of data that are too big to load into memory all at once.

```php
$item = new \Picqer\Financials\Exact\Item($connection);
$item->getAsGenerator();
$item->filterAsGenerator('IsWebshopItem eq 1');
```

## Connect to other Exact country than NL

Choose the right base URL according to [Exact developers guide](https://developers.exactonline.com/#Exact%20Online%20sites.html)

```php
$connection = new \Picqer\Financials\Exact\Connection();
$connection->setRedirectUrl('CALLBACK_URL');
$connection->setExactClientId('CLIENT_ID');
$connection->setExactClientSecret('CLIENT_SECRET');
$connection->setBaseUrl('https://start.exactonline.de');
```

Check [src/Picqer/Financials/Exact](src/Picqer/Financials/Exact) for all available entities.

## Webhooks

Managaging webhook subscriptions is possible through the [WebhookSubscription](src/Picqer/Financials/Exact/WebhookSubscription.php) entitiy.

For authenticating incoming webhook calls you can use the [Authenticatable](src/Picqer/Financials/Exact/Webhook/Authenticatable.php) trait.
Supply the authenticate method with the full JSON request and your Webhook secret supplied by Exact, it will return true or false.

## Troubleshooting

> 'Picqer\Financials\Exact\ApiException' with message 'Error 400: Please add a $select or a $top=1 statement to the query string.'

In specific instances, sadly not documented in the API documentation of Exact this is a requirement. Probably to prevent overflooding requests. What you have to do when encountering this error is adding a select or top. The select is used to provide a list of fields you want to extract, the $top=1 limits the results to one item.

Examples:

Return only the EntryID and FinancialYear.
```php
$test = new \Picqer\Financials\Exact\GeneralJournalEntry($connection);
var_dump($test->filter('', '', 'EntryID, FinancialYear'));
```

The $top=1 is added like this:
```php
$test = new \Picqer\Financials\Exact\GeneralJournalEntry($connection);
var_dump($test->filter('', '', '', ['$top'=> 1]));
```

### Authentication error

> 'Fatal error: Uncaught Exception: Could not connect to Exact: Client error:POST https://start.exactonline.nl/api/oauth2/token resulted in a 400 Bad Request response: Bad Request in /var/www/html/oauth_call_connect.php:61 Stack trace: #0 {main} thrown in /var/www/html/oauth_call_connect.php on line 61`'

This error occurs because the code you get in your redirect URL is only valid for one call. When you call the authentication-process again with a "used" code. You get this error. Make sure you use the provided code by Exact Online only once to get your access token.

## Code example

See for example: [example/example.php](example/example.php)

## Guzzle versions
Guzzle 6 and 7 is supported starting from v3. For Guzzle 3 use [v1](https://github.com/picqer/exact-php-client/releases?q=v1&expanded=true).

## TODO

- Current entities do not contain all available properties. Feel free to submit a PR with added or extended entities if you require them. Use the ```userscript.js``` in greasemonkey or tampermonkey to generate entities consistently and completely.

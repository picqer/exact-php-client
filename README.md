# exact-php-client

PHP client library to use the Exact Online API.

## Composer install
Installing this Exact client for PHP can be done through Composer.

    "require": {
      "picqer/exact-php-client": "~1.0"
    }
    
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

        $connection = new \Picqer\Financials\Exact\Connection();
        $connection->setRedirectUrl('CALLBACK_URL'); // Same as entered online in the App Center
        $connection->setExactClientId('CLIENT_ID');
        $connection->setExactClientSecret('CLIENT_SECRET');
        $connection->redirectForAuthorization();

This will redirect the user to Exact to login and authorize your integration with their account.

### Parse callback and finish connection set up
Exact will redirect back to the `callback url` you provided. The callback will receive a `code` param. 
This is the authorization code for oAuth. Store this code.

Make a new connection to Exact so the library can exchange codes and fetch the `accesstoken` and `refreshtoken`.
The `accesstoken` is a temporary token which allows for communication between your app and Exact.
The `refreshtoken` is a token which is used to get a new `accesstoken` which also refreshes the `refreshtoken`. 
The library will settle all of this for you. The code below could be an general `connect()` function, which returns
the api connection.

        $connection = new \Picqer\Financials\Exact\Connection();
        $connection->setRedirectUrl('CALLBACK_URL');
        $connection->setExactClientId('CLIENT_ID');
        $connection->setExactClientSecret('CLIENT_SECRET');

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

### Use the library to do stuff (examples)

      // Create a new account
      $account = new Account($connection);
      $account->AddressLine1 = $customer['address'];
      $account->AddressLine2 = $customer['address2'];
      $account->City = $customer['city'];
      $account->Code = $customer['customerid'];
      $account->Country = $customer['country'];
      $account->IsSales = 'true';
      $account->Name = $customer['name'];
      $account->Postcode = $customer['zipcode'];
      $account->Status = 'C';
      $account->save();


      // Add a product in Exact
      $item = new Item($connection);
      $item->Code = $productcode;
      $item->CostPriceStandard = $costprice;
      $item->Description = $name;
      $item->IsSalesItem = true;
      $item->SalesVatCode = 'VH';
      $item->save();


      // Retrieve an item
      $item = new Item($connection);
      $item->find(ID);
    
      // List items
      $item = new Item($connection);
      $item->get();
    
      // List items with filter
      $item = new Item($connection);
      $item->filter("Code eq '$productcode'"); // Uses filters as described in Exact API docs (odata filters)

Check `src/Picqer/Financials/Exact` for all available entities.


## TODO
- Switch administration (now uses default)
- Current entities do not contain all available properties. Feel free to submit a PR with added or extended entities if you require them.



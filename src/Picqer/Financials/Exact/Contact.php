<?php namespace Picqer\Financials\Exact;

class Contact extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Account',
        'AccountIsCustomer',
        'AccountIsSupplier',
        'AccountName',
        'AddressStreet',
        'AddressStreetNumber',
        'FirstName',
        'LastName',
        'Phone',
        'Postcode',
        'City',
        'Code',
        'Country',
        'Division',
        'Email',
        'HID',
        'AccountMainContact',
        'IsMainContact'
    ];

    protected $url = 'crm/Contacts';

}


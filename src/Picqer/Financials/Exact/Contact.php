<?php namespace Picqer\Financials\Exact;

class Contact extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountIsCustomer',
        'AccountIsSupplier',
        'AccountName',
        'AddressStreet',
        'AddressStreetNumber',
        'Initials',
        'FirstName',
        'MiddleName',
        'LastName',
        'Gender',
        'Phone',
        'Postcode',
        'City',
        'Code',
        'Country',
        'Division',
        'Email',
        'HID',
        'AccountMainContact',
        'IsMainContact',
    ];

    protected $url = 'crm/Contacts';

}


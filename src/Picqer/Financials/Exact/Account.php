<?php namespace Picqer\Financials\Exact;

class Account extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'AddressLine1',
        'AddressLine2',
        'ChamberOfCommerce',
        'City',
        'Code',
        'Country',
        'Division',
        'Email',
        'ID',
        'IsSales',
        'Language',
        'Name',
        'Phone',
        'Postcode',
        'Website'
    ];

    protected $url = 'crm/Accounts';

}
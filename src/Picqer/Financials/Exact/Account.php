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
        'Language',
        'Name',
        'Phone',
        'Postcode',
        'Website',
        'Status',
        'SearchCode',
        'MainContact',
        'Remarks',
        'PurchaseVATCode',
        'VATNumber',
        'IsSales'
    ];

    protected $url = 'crm/Accounts';

}

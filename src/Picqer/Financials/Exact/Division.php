<?php namespace Picqer\Financials\Exact;

class Division extends Model
{

    use Query\Findable;

    protected $fillable = [
        'Code',
        'BlockingStatus',
        'Country',
        'CountryDescription',
        'Created',
        'Creator',
        'Currency',
        'CurrencyDescription',
        'Customer',
        'Description',
        'HID',
        'Main',
        'Modified',
        'Modifier',
        'SiretNumber',
        'StartDate',
        'Status',
        'TaxOfficeNumber',
        'TaxReferenceNumber',
        'VATNumber',
        'Website'
    ];

    protected $url = 'hrm/Divisions';

}

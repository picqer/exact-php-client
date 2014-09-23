<?php namespace Picqer\Financials\Exact;

class SalesInvoiceLine extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Description',
        'Discount',
        'Division',
        'ID',
        'InvoiceID',
        'Item',
        'ItemDescription',
        'NetPrice',
        'Quantity',
        'VATCode',
        'VATPercentage',
    ];

    protected $url = 'salesinvoice/SalesInvoiceLines';

}
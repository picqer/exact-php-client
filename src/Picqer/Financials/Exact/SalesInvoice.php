<?php namespace Picqer\Financials\Exact;

class SalesInvoice extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'InvoiceID';

    protected $fillable = [
        'Division',
        'Currency',
        'DueDate',
        'InvoiceDate',
        'InvoiceID',
        'InvoiceNumber',
        'InvoiceTo',
        'YourRef',
        'SalesInvoiceLines',
        'OrderedBy'
    ];

    protected $url = 'salesinvoice/SalesInvoices';

}
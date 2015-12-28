<?php namespace Picqer\Financials\Exact;

class Document extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AmountFC',
        'Body',
        'Category',
        'CategoryDescription',
        'Contact',
        'CreatorFullName',
        'Currency',
        'DocumentDate',
        'DocumentFolder',
        'FinancialTransactionEntryID',
        'HID',
        'Language',
        'Opportunity',
        'SalesInvoiceNumber',
        'SalesOrderNumber',
        'ShopOrderNumber',
        'Subject',
        'Type',     
    ];

    protected $url = 'documents/Documents';

}

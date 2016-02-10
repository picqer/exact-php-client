<?php namespace Picqer\Financials\Exact;

class ReceivableList extends Model
{

    use Query\Findable;

    protected $fillable = [
		'AccountCode',
		'AccountId',
		'AccountName',
		'Amount',
		'AmountInTransit',
		'CurrencyCode',
		'Description',
		'DueDate',
		'EntryNumber',
		'Id',
		'InvoiceDate',
		'InvoiceNumber',
		'JournalCode',
		'JournalDescription',
		'YourRef'
    ];

    protected $url = 'read/financial/ReceivablesList';

}
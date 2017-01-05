<?php namespace Picqer\Financials\Exact;

/**
 * Class ReceivablesListByAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesListByAccount
 * 
 * @property Int64 $HID 
 * @property String $AccountCode The code of the customer from which the receivable will come.
 * @property Guid $AccountId 
 * @property String $AccountName Name of the customer.
 * @property Double $Amount 
 * @property Double $AmountInTransit 
 * @property String $CurrencyCode 
 * @property String $Description Description.
 * @property DateTime $DueDate Date before which the payment by the customer must be done.
 * @property Int32 $EntryNumber Entry number of the linked transaction.
 * @property Guid $Id 
 * @property DateTime $InvoiceDate Invoice date of the linked transaction.
 * @property Int32 $InvoiceNumber Invoice number of the linked transaction.
 * @property String $JournalCode 
 * @property String $JournalDescription Description of the journal.
 * @property String $YourRef Invoice number. In case the receivable belongs to a bank entry line and is matched with one invoice, YourRef is filled with the YourRef of this invoice.
 */
class ReceivablesListByAccount extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'accountId';

    protected $fillable = [
        'HID',
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

    protected $url = 'read/financial/ReceivablesListByAccount';

}

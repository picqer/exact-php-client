<?php namespace Picqer\Financials\Exact;

/**
 * Class ReceivablesList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesList
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
class ReceivablesList extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'HID';

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

    protected $url = 'read/financial/ReceivablesList';

}

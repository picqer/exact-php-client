<?php

namespace Picqer\Financials\Exact;

/**
 * Class PayablesList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialPayablesList
 *
 * @property Int64 $HID Primary key, human readable ID
 * @property String $AccountCode Code of Account
 * @property Guid $AccountId Reference to the account
 * @property String $AccountName Name of Account
 * @property Double $Amount Amount
 * @property Double $AmountInTransit Amount in transit
 * @property String $CurrencyCode Code of Currency
 * @property String $Description Description
 * @property DateTime $DueDate Date the invoice should be paid
 * @property Int32 $EntryNumber Entry number
 * @property Guid $Id Obsolete
 * @property DateTime $InvoiceDate Invoice date
 * @property Int32 $InvoiceNumber Invoice number. The value is 0 when the invoice number of the linked transaction is empty.
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property String $YourRef Your reference
 */
class PayablesList extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'YourRef',
    ];

    protected $url = 'read/financial/PayablesList';
}
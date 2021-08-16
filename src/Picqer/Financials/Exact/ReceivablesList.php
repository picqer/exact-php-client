<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReceivablesList.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesList
 *
 * @property int $HID Primary key, human readable ID
 * @property string $AccountCode Code of Account
 * @property string $AccountId Reference to the account
 * @property string $AccountName Name of Account
 * @property float $Amount Amount
 * @property float $AmountInTransit Amount in transit - The amount that you have requested your bank to pay
 * @property string $CurrencyCode Code of Currency
 * @property string $Description Description
 * @property string $DueDate Date the invoice is due (This due date is not the discount due date)
 * @property int $EntryNumber The entry number of this payment term corresponding sales/cashflow entry
 * @property string $InvoiceDate The date of the invoice or the date when money is collected from the customer
 * @property int $InvoiceNumber For sales entry, it would be the entrynumber. For the cashflow entry, it will be entrynumber of an invoice which this collection is for
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $YourRef Sales invoice Your Reference number. Will be null if it is a cashflow entry
 */
class ReceivablesList extends Model
{
    use Query\Findable;

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
        'InvoiceDate',
        'InvoiceNumber',
        'JournalCode',
        'JournalDescription',
        'YourRef',
    ];

    protected $url = 'read/financial/ReceivablesList';
}

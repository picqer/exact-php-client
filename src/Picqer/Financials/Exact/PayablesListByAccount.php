<?php

namespace Picqer\Financials\Exact;

/**
 * Class PayablesListByAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialPayablesListByAccount
 *
 * @property int $HID Primary key, human readable ID
 * @property string $AccountCode Code of Account
 * @property string $AccountId Reference to the account
 * @property string $AccountName Name of Account
 * @property float $Amount Amount
 * @property float $AmountInTransit Amount in transit - The amount that you have requested your bank to pay
 * @property int $ApprovalStatus Approval status: null - Invoice was entered before approval functionality was activated (treated as Approved for payments) 1 - N/A (used for non-electronic payment methods) 2 - Awaiting review 3 - Awaiting approval 4 - Approved
 * @property string $CurrencyCode Code of Currency
 * @property string $Description Description
 * @property string $DueDate Date the invoice is due (This due date is not the discount due date)
 * @property int $EntryNumber The entry number of this payment term corresponding purchase/cashflow entry
 * @property string $InvoiceDate The date of the invoice or the date when money is paid to the supplier
 * @property int $InvoiceNumber For purchase entry, it would be the entrynumber. For the cashflow entry, it will be entrynumber of an invoice which this payment is for
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $YourRef Purchase invoice Your Reference number. Will be null if it is a cashflow entry
 */
class PayablesListByAccount extends Model
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
        'ApprovalStatus',
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

    protected $url = 'read/financial/PayablesListByAccount';
}

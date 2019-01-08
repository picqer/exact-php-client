<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReceivableList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesList
 *
 * @property int $HID Human readable ID, Primary key
 * @property string $AccountCode Code of the Account
 * @property string $AccountId Reference to the account
 * @property string $AccountName Name of Account
 * @property float $Amount Amount
 * @property float $AmountInTransit Amount in transit
 * @property string $CurrencyCode Code of Currency
 * @property string $Description Description
 * @property string $DueDate Date the invoice should be paid
 * @property int $EntryNumber Entry number
 * @property string $Id Obsolete
 * @property string $InvoiceDate Invoice date
 * @property int $InvoiceNumber Invoice number
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $YourRef Your reference
 */
class ReceivableList extends Model
{
    use Query\Findable;

    protected $primaryKey = 'HID';

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
		'HID',
		'Id',
		'InvoiceDate',
		'InvoiceNumber',
		'JournalCode',
		'JournalDescription',
		'YourRef',
    ];

    protected $url = 'read/financial/ReceivablesList';
}
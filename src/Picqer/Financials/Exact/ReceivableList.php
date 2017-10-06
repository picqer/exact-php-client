<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReceivableList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReceivablesList
 *
 * @property Int64 $HID Human readable ID, Primary key
 * @property String $AccountCode Code of the Account
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
 * @property Int32 $InvoiceNumber Invoice number
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property String $YourRef Your reference
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
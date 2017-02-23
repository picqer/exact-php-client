<?php namespace Picqer\Financials\Exact;

/**
 * Class PayablesListByAgeGroup
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialPayablesListByAgeGroup
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
 * @property DateTime $InvoiceDate Invoice date
 * @property Int32 $InvoiceNumber Invoice number
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property String $YourRef Your reference
 */
class PayablesListByAgeGroup extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'HID';

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'ageGroup';

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
        'YourRef'
    ];

    protected $url = 'read/financial/PayablesListByAgeGroup';

}

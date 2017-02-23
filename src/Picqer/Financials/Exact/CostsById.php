<?php namespace Picqer\Financials\Exact;

/**
 * Class CostsById
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostsById
 * 
 * @property Int32 $Id Primary key
 * @property String $AccountCode Code of Account
 * @property Guid $AccountId Reference to Account
 * @property String $AccountName Name of Account
 * @property Double $AmountApproved Amount approved
 * @property Double $AmountDraft Amount draft
 * @property Double $AmountRejected Amount rejected
 * @property Double $AmountSubmitted Amount submitted
 * @property String $CurrencyCode Code of Currency
 * @property DateTime $Date Date
 * @property Guid $EntryId Entry ID
 * @property Guid $Expense Reference to Expense
 * @property String $ExpenseDescription Description of Expense
 * @property String $ItemCode Code of Item
 * @property String $ItemDescription Description of Item
 * @property Guid $ItemId Reference to Item
 * @property String $Notes Remarks
 * @property String $ProjectCode Code of Project
 * @property String $ProjectDescription Description of Project
 * @property Guid $ProjectId Reference to Project
 * @property Double $QuantityApproved Quantity approved
 * @property Double $QuantityDraft Quantity draft
 * @property Double $QuantityRejected Quantity rejected
 * @property Double $QuantitySubmitted Quantity submitted
 * @property Int32 $WeekNumber Week number
 */
class CostsById extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Id';

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'entryId';

    protected $fillable = [
        'Id',
        'AccountCode',
        'AccountId',
        'AccountName',
        'AmountApproved',
        'AmountDraft',
        'AmountRejected',
        'AmountSubmitted',
        'CurrencyCode',
        'Date',
        'EntryId',
        'Expense',
        'ExpenseDescription',
        'ItemCode',
        'ItemDescription',
        'ItemId',
        'Notes',
        'ProjectCode',
        'ProjectDescription',
        'ProjectId',
        'QuantityApproved',
        'QuantityDraft',
        'QuantityRejected',
        'QuantitySubmitted',
        'WeekNumber'
    ];

    protected $url = 'read/project/CostsById';

}

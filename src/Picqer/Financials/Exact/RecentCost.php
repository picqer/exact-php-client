<?php

namespace Picqer\Financials\Exact;

/**
 * Class RecentCost
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectRecentCosts
 *
 * @property int $Id Primary key
 * @property string $AccountCode Code of Account
 * @property string $AccountId Reference to Account
 * @property string $AccountName Name of Account
 * @property float $AmountApproved Amount approved
 * @property float $AmountDraft Amount draft
 * @property float $AmountRejected Amount rejected
 * @property float $AmountSubmitted Amount submitted
 * @property string $CurrencyCode Code of Currency
 * @property string $Date Date
 * @property string $EntryId Entry ID
 * @property string $Expense Reference to Expense
 * @property string $ExpenseDescription Description of Expense
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $ItemId Reference to Item
 * @property string $Notes Remarks
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property string $ProjectId Reference to Project
 * @property float $QuantityApproved Quantity approved
 * @property float $QuantityDraft Quantity draft
 * @property float $QuantityRejected Quantity rejected
 * @property float $QuantitySubmitted Quantity submitted
 * @property int $WeekNumber Week number
 */
class RecentCost extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Id';

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
        'WeekNumber',
    ];

    protected $url = 'read/project/RecentCosts';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostsByDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostsByDate
 *
 * @property int $Id Primary key
 * @property string $AccountCode Code of account linked to the project that hours are being entered to
 * @property string $AccountId ID of account linked to the project that hours are being entered to
 * @property string $AccountName Name of account linked to the project that hours are being entered to
 * @property float $AmountApproved The total amount of (Quantity * Sales price of cost item) that has been approved
 * @property float $AmountDraft The total amount of (Quantity * Sales price of cost item) that has been saved as draft
 * @property float $AmountRejected The total amount of (Quantity * Sales price of cost item) that has been rejected
 * @property float $AmountSubmitted The total amount of (Quantity * Sales price of cost item) that has been submitted
 * @property string $CurrencyCode Code of sales currency which is used in the cost item
 * @property string $Date Date of entry
 * @property string $EntryId Entry ID of record
 * @property string $Expense The ID of the Expense that is linked to the project
 * @property string $ExpenseDescription The description of the Expense that is linked to the project
 * @property string $ItemCode Code of the item used for cost entry
 * @property string $ItemDescription Description of the item used for cost entry
 * @property string $ItemId ID of the item used for cost entry
 * @property string $Notes Notes entered regarding the information of the cost entered
 * @property string $ProjectCode Code of project that the costs are entered on
 * @property string $ProjectDescription Description of project that the costs are entered on
 * @property string $ProjectId ID of project that the costs are entered on
 * @property float $QuantityApproved Quantity of items that is used in cost entry that are approved
 * @property float $QuantityDraft Quantity of items that is used in cost entry that are saved as draft
 * @property float $QuantityRejected Quantity of items that is used in cost entry that are rejected
 * @property float $QuantitySubmitted Quantity of items that is used in cost entry that are submitted
 * @property int $WeekNumber The week number that the cost entries have been entered on
 */
class CostsByDate extends Model
{
    use Query\Findable;

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

    protected $url = 'read/project/CostsByDate';
}

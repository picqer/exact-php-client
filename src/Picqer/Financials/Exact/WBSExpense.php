<?php

namespace Picqer\Financials\Exact;

/**
 * Class WBSExpense.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectWBSExpenses
 *
 * @property string $ID Primary key
 * @property bool $BlockEntry To indicated if cost entries is blocked
 * @property bool $BlockRebilling To indicated if rebilling is blocked
 * @property float $BudgetedCost Budget cost of the WBS expense
 * @property float $BudgetedRevenue Revenue of the WBS expense
 * @property string $Created The date and time when the WBS expense was created
 * @property string $Creator The ID of the user that created the WBS expense
 * @property string $CreatorFullName The full name of the user that created the WBS expense
 * @property string $Description Description of the WBS expense
 * @property int $Division Division code
 * @property string $EndDate End date of the WBS expense
 * @property bool $InvoiceSeparately To indicated if additional invoice is allowed on this WBS expense. Additional invoice can only be set when the project type is fixed price or prepaid and the project allow additional invoices.
 * @property float $MarkupPercentage Markup percentage
 * @property string $Modified The date when the WBS expense was modified
 * @property string $Modifier The ID of the user that modified the WBS expense
 * @property string $ModifierFullName The full name of the user that modified the WBS expense
 * @property string $Notes For additional information
 * @property string $PartOf ID of the WBS expense part of
 * @property string $PartOfDescription Description of part of
 * @property string $Project ID of the project that linked to WBS expense
 * @property string $ProjectDescription Project description that is linked to WBS expense
 * @property int $SequenceNumber Sequence number of the WBS deliverable. Last sequence will be selected if not specified
 * @property string $StartDate Start date of the WBS expense
 */
class WBSExpense extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BlockEntry',
        'BlockRebilling',
        'BudgetedCost',
        'BudgetedRevenue',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EndDate',
        'InvoiceSeparately',
        'MarkupPercentage',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PartOf',
        'PartOfDescription',
        'Project',
        'ProjectDescription',
        'SequenceNumber',
        'StartDate',
    ];

    protected $url = 'project/WBSExpenses';
}

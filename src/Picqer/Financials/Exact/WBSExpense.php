<?php

namespace Picqer\Financials\Exact;

/**
 * Class WBSExpense.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectWBSExpenses
 *
 * @property string $ID Primary key
 * @property bool $AutoCreateInvoiceTerm To indicated auto create invoice term when invoice method is Fixed
 * @property bool $BlockEntry To indicated if cost entries is blocked
 * @property bool $BlockRebilling To indicated if rebilling is blocked
 * @property float $BudgetedCost Budget cost of the WBS expense
 * @property float $BudgetedRevenue Revenue of the WBS expense
 * @property string $Created The date and time when the WBS expense was created
 * @property string $Creator The ID of the user that created the WBS expense
 * @property string $CreatorFullName The full name of the user that created the WBS expense
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description Description of the WBS expense
 * @property int $Division Division code
 * @property string $EndDate End date of the WBS expense
 * @property string $InvoiceDate The invoice term date of the WBS when set to fixed billing
 * @property int $InvoiceMethod The invoice method of the WBS. E.g: 6 = Fixed, 7 = Rebill, 8 = Non re-billable
 * @property string $InvoiceTerm ID of the invoice term that linked to the WBS
 * @property string $Item Item to used for cost entry
 * @property float $MarkupPercentage Markup percentage
 * @property string $Modified The date when the WBS expense was modified
 * @property string $Modifier The ID of the user that modified the WBS expense
 * @property string $ModifierFullName The full name of the user that modified the WBS expense
 * @property string $Notes For additional information
 * @property string $PartOf ID of the WBS expense part of
 * @property string $PartOfDescription Description of part of
 * @property string $Project ID of the project that linked to WBS expense
 * @property string $ProjectDescription Project description that is linked to WBS expense
 * @property float $PurchasePrice Purchase price of the item
 * @property float $Quantity Quantity of the WBS
 * @property int $SequenceNumber Sequence number of the WBS deliverable. Last sequence will be selected if not specified
 * @property string $StartDate Start date of the WBS expense
 * @property string $Supplier Supplier of the item
 */
class WBSExpense extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AutoCreateInvoiceTerm',
        'BlockEntry',
        'BlockRebilling',
        'BudgetedCost',
        'BudgetedRevenue',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'Description',
        'Division',
        'EndDate',
        'InvoiceDate',
        'InvoiceMethod',
        'InvoiceTerm',
        'Item',
        'MarkupPercentage',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PartOf',
        'PartOfDescription',
        'Project',
        'ProjectDescription',
        'PurchasePrice',
        'Quantity',
        'SequenceNumber',
        'StartDate',
        'Supplier',
    ];

    protected $url = 'project/WBSExpenses';
}

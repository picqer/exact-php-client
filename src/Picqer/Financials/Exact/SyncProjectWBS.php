<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncProjectWBS.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncProjectProjectWBS
 *
 * @property int $Timestamp Timestamp
 * @property int $BlockEntry A boolean field to indicated if time and cost entries is blocked
 * @property int $BlockRebilling A boolean field to indicated if rebilling is blocked. Only for expense
 * @property float $BudgetedCost Budget cost of the WBS activity and expense
 * @property float $BudgetedHours Budget hours of the WBS. Only for activity
 * @property float $BudgetedQuantity Budget quantity of the WBS. Only for expense
 * @property float $BudgetedRevenue Revenue of the WBS. Only for activity and expense
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed. Only for activity
 * @property int $Completed A boolean field to indicated if the project WBS deliverable is completed.
 * @property string $Created The date and time when the WBS was created
 * @property string $Creator The ID of the user that created the WBS
 * @property string $CreatorFullName The full name of the user that created the WBS
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $DefaultItem Default item to used for timecost entry
 * @property int $DefaultItemIsMandatory To indicated if only default item is allowed. Only for activity
 * @property string $Description Description of the project WBS
 * @property int $Division Division code
 * @property string $EndDate EndDate of the WBS. If it is a deliverable then EndDate is the lastest EndDate of its children
 * @property string $ID Primary key
 * @property string $InvoiceDate The invoice date of the WBS when invoice term is generated
 * @property int $InvoiceMethod The invoice method of the WBS. For activity: 2 = Fixed price, 3 = Time and Material, 4 = Non billable, 5 = Prepaid. For expense: 6 = Fixed, 7 = Rebill, 8 = Non re-billable
 * @property float $MarkupPercentage Markup percentage for WBS expense
 * @property int $Milestone To indicated if this is a milestone for WBS deliverable
 * @property string $Modified Last modified date and time
 * @property string $Modifier The Guid ID of the user that modified the records
 * @property string $ModifierFullName The full name of the user that modified the WBS
 * @property string $Notes For additional information about wbs
 * @property string $PartOf ID of the parent WBS
 * @property string $PartOfDescription Description of part of
 * @property string $Project ID of the project that linked to WBS
 * @property string $ProjectDescription Description of the project that linked to WBS
 * @property string $ProjectTerm ID of invoice term that linked to the WBS deliverable. Invoice term can only be linked when the project is using billing milestones and the deliverable is set as a milestone
 * @property string $ProjectTermDescription Description of invoice term that linked to the WBS deliverable
 * @property float $PurchasePrice Purchase price of the item. Only for expense
 * @property int $SequenceNumber Sequence number of the WBS. Last sequence will be selected if not specified
 * @property string $StartDate Startdate of the WBS. If it is a deliverable then StartDate is the earliest StartDate of its children
 * @property string $Supplier Supplier of the item. Only for expense
 * @property float $TimeQuantityToAlert Alert when exceeding this time quantity for WBS activity
 * @property int $Type The type of project WBS. E.g: 1 = Deliverable, 2 = Activity, 3 = Expense
 */
class SyncProjectWBS extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'BlockEntry',
        'BlockRebilling',
        'BudgetedCost',
        'BudgetedHours',
        'BudgetedQuantity',
        'BudgetedRevenue',
        'BudgetOverrunHours',
        'Completed',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'DefaultItem',
        'DefaultItemIsMandatory',
        'Description',
        'Division',
        'EndDate',
        'ID',
        'InvoiceDate',
        'InvoiceMethod',
        'MarkupPercentage',
        'Milestone',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PartOf',
        'PartOfDescription',
        'Project',
        'ProjectDescription',
        'ProjectTerm',
        'ProjectTermDescription',
        'PurchasePrice',
        'SequenceNumber',
        'StartDate',
        'Supplier',
        'TimeQuantityToAlert',
        'Type',
    ];

    protected $url = 'sync/Project/ProjectWBS';
}

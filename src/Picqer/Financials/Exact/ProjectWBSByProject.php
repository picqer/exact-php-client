<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectWBSByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectProjectWBSByProject
 *
 * @property string $ID Primary key
 * @property string $BaselineDate Baseline date of this deliverable
 * @property bool $BlockEntry A boolean field to indicated if time and cost entries is blocked
 * @property bool $BlockRebilling A boolean field to indicated if rebilling is blocked
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed
 * @property int $Completed A boolean field to indicated if the project WBS is completed
 * @property float $Cost Budget cost of the WBS
 * @property string $Created Date and time the project was created
 * @property string $Creator The Guid ID of user that created the project
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $DefaultItem Default Item to used for timecost entry
 * @property int $DefaultItemIsMandatory To indicated if only default item is allowed
 * @property string $Description Description of the project WBS
 * @property int $Division Division code
 * @property string $EndDate EndDate of the WBS. If it is a deliverable then EndDate is the lastest EndDate of its children
 * @property float $Hours Budget quantity of the WBS
 * @property int $InvoiceMethod The invoice method of the WBS. For activity: 2 = Fixed price, 3 = Time and Material, 4 = Non billable, 5 = Prepaid. For expense: 6 = Fixed, 7 = Rebill, 8 = Non re-billable
 * @property int $IsBaseline A boolean field to indicated if this is a baseline
 * @property int $Milestone A boolean field to indicated if this is a milestone
 * @property string $Modified Last modified date and time
 * @property string $Modifier The Guid ID of the user that modified the records
 * @property string $Notes For additional information about wbs
 * @property string $Parent ID of the parent WBS
 * @property string $Project ID of the project that linked to WBS
 * @property string $ProjectTerm ID of the invoice term that linked to the WBS
 * @property float $PurchaseMarkupPercentage Markup percentage
 * @property float $PurchasePrice Purchase price of the item. Only for expense
 * @property float $Quantity Quantity of the WBS. Only for expense
 * @property float $Revenue Revenue of the WBS
 * @property string $StartDate Startdate of the WBS. If it is a deliverable then StartDate is the earliest StartDate of its children
 * @property string $Supplier Supplier of the item. Only for expense
 * @property float $TimeQuantityToAlert Alert when exceeding this time quantity
 * @property int $Type The type of project WBS. E.g: 1 = Deliverable, 2 = Activity, 3 = Expense
 */
class ProjectWBSByProject extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'BaselineDate',
        'BlockEntry',
        'BlockRebilling',
        'BudgetOverrunHours',
        'Completed',
        'Cost',
        'Created',
        'Creator',
        'CustomField',
        'DefaultItem',
        'DefaultItemIsMandatory',
        'Description',
        'Division',
        'EndDate',
        'Hours',
        'InvoiceMethod',
        'IsBaseline',
        'Milestone',
        'Modified',
        'Modifier',
        'Notes',
        'Parent',
        'Project',
        'ProjectTerm',
        'PurchaseMarkupPercentage',
        'PurchasePrice',
        'Quantity',
        'Revenue',
        'StartDate',
        'Supplier',
        'TimeQuantityToAlert',
        'Type',
    ];

    protected $url = 'read/project/ProjectWBSByProject';
}

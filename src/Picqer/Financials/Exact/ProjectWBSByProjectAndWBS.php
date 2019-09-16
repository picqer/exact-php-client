<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectWBSByProjectAndWBS.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectProjectWBSByProjectAndWBS
 *
 * @property string $ID Primary key
 * @property int $AdditionalInvoicing Indicates whether to allow additional invoice on this wbs
 * @property string $BaselineDate Baseline date of this deliverable
 * @property bool $BlockEntry Block time and cost entries
 * @property bool $BlockRebilling Block rebilling
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed
 * @property int $Completed Indicates whether the project WBS is completed
 * @property float $Cost Budget cost of the WBS.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $DefaultItem Default Item to used for timecost entry
 * @property string $Description Description of the project WBS
 * @property int $Division Division code
 * @property string $EndDate EndDate of the WBS.If it is a deliverable then EndDate is the lastest EndDate of its children
 * @property float $Hours Budget quantity of the WBS.
 * @property int $IsBaseline Indicates whether this is a baseline
 * @property int $Milestone Indicates whether this is a milestone
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $Notes For additional information about wbs
 * @property string $Parent ID of the parent WBS
 * @property string $Project ID of project
 * @property string $ProjectTerm ID of invoice planning
 * @property float $PurchaseMarkupPercentage Markup percentage
 * @property float $Revenue Revenue of the WBS.
 * @property string $StartDate Startdate of the WBS.If it is a deliverable then StartDate is the earliest StartDate of its children
 * @property float $TimeQuantityToAlert Alert when exceeding this time quantity
 * @property int $Type Type: 1-Deliverable, 2-Activity, 3-Expense
 */
class ProjectWBSByProjectAndWBS extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AdditionalInvoicing',
        'BaselineDate',
        'BlockEntry',
        'BlockRebilling',
        'BudgetOverrunHours',
        'Completed',
        'Cost',
        'Created',
        'Creator',
        'DefaultItem',
        'Description',
        'Division',
        'EndDate',
        'Hours',
        'IsBaseline',
        'Milestone',
        'Modified',
        'Modifier',
        'Notes',
        'Parent',
        'Project',
        'ProjectTerm',
        'PurchaseMarkupPercentage',
        'Revenue',
        'StartDate',
        'TimeQuantityToAlert',
        'Type',
    ];

    protected $url = 'read/project/ProjectWBSByProjectAndWBS?projectId={Edm.Guid}&projectWBSId={Edm.Guid}&wbsType={Edm.Int16}';
}

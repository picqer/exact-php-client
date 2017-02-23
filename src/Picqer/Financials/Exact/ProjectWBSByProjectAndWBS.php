<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProjectWBSByProjectAndWBS
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectProjectWBSByProjectAndWBS
 * 
 * @property Guid $ID Primary key
 * @property Byte $AdditionalInvoicing Indicates whether to allow additional invoice on this wbs
 * @property DateTime $BaselineDate Baseline date of this deliverable
 * @property Boolean $BlockEntry Block time and cost entries
 * @property Boolean $BlockRebilling Block rebilling
 * @property Byte $Completed Indicates whether the project WBS is completed
 * @property Double $Cost Budget cost of the WBS.
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property Guid $DefaultItem Default Item to used for timecost entry
 * @property String $Description Description of the project WBS
 * @property Int32 $Division Division code
 * @property DateTime $EndDate EndDate of the WBS.If it is a deliverable then EndDate is the lastest EndDate of its children
 * @property Double $Hours Budget quantity of the WBS.
 * @property Byte $IsBaseline Indicates whether this is a baseline
 * @property Byte $Milestone Indicates whether this is a milestone
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $Notes For additional information about wbs
 * @property Guid $Parent ID of the parent WBS
 * @property Guid $Project ID of project
 * @property Guid $ProjectTerm ID of invoice planning
 * @property Double $PurchaseMarkupPercentage Markup percentage
 * @property Double $Revenue Revenue of the WBS.
 * @property DateTime $StartDate Startdate of the WBS.If it is a deliverable then StartDate is the earliest StartDate of its children
 * @property Double $TimeQuantityToAlert Alert when exceeding this time quantity
 * @property Int16 $Type Reference to ProjectWBSTypes
 */
class ProjectWBSByProjectAndWBS extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'ID',
        'AdditionalInvoicing',
        'BaselineDate',
        'BlockEntry',
        'BlockRebilling',
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
        'Type'
    ];

    protected $url = 'read/project/ProjectWBSByProjectAndWBS';

}

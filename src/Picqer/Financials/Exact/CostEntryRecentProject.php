<?php 

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentProjects
 * 
 * @property Guid $ProjectId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ProjectCode Code of project
 * @property String $ProjectDescription Description of project
 */
class CostEntryRecentProject extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'DateLastUsed',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'read/project/CostEntryRecentProjects';

}

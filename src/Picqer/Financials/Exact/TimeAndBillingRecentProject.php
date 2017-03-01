<?php 

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingRecentProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingRecentProjects
 * 
 * @property Guid $ProjectId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ProjectCode Code of project
 * @property String $ProjectDescription Description of project
 */
class TimeAndBillingRecentProject extends Model
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

    protected $url = 'read/project/TimeAndBillingRecentProjects';

}

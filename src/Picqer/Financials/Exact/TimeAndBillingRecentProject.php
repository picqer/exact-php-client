<?php namespace Picqer\Financials\Exact;

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

    protected $fillable = [
        'ProjectId',
        'DateLastUsed',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'read/project/TimeAndBillingRecentProjects';

}

<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentProjects
 * 
 * @property Guid $ProjectId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ProjectCode Code of project
 * @property String $ProjectDescription Description of project
 */
class TimeAndBillingEntryRecentProject extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ProjectId',
        'DateLastUsed',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentProjects';

}

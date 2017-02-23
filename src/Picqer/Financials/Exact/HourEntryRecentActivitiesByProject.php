<?php namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentActivitiesByProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentActivitiesByProject
 * 
 * @property Guid $ID Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $Description Description
 * @property String $ParentDescription Description of Parent
 */
class HourEntryRecentActivitiesByProject extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'Description',
        'ParentDescription'
    ];

    protected $url = 'read/project/HourEntryRecentActivitiesByProject';

}

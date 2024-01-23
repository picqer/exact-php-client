<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentActivitiesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentActivitiesByProject
 *
 * @property string $ID Primary key
 * @property string $DateLastUsed Date last used
 * @property string $DefaultItem ID of the defaultItem
 * @property string $DefaultItemCode Item code of the defaultItem
 * @property string $DefaultItemDescription Description of the defaultItem
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class HourEntryRecentActivitiesByProject extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'DefaultItem',
        'DefaultItemCode',
        'DefaultItemDescription',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/HourEntryRecentActivitiesByProject';
}

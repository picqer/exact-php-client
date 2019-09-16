<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentActivitiesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentActivitiesByProject
 *
 * @property string $ID Primary key
 * @property string $DateLastUsed Date last used
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class HourEntryRecentActivitiesByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/HourEntryRecentActivitiesByProject?projectId={Edm.Guid}';
}

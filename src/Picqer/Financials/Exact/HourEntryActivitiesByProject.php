<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryActivitiesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryActivitiesByProject
 *
 * @property string $ID ID of activity or expense
 * @property string $Description Description of activity or expense
 * @property string $ParentDescription Description of its parent
 */
class HourEntryActivitiesByProject extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/HourEntryActivitiesByProject';
}

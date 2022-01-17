<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentProjects
 *
 * @property string $ProjectId The Id of the project that hours entries are entered
 * @property string $DateLastUsed The datetime the hour entries have been entered on the project
 * @property string $ProjectCode The code of the project that the hour entries have been entered on
 * @property string $ProjectDescription The description of the project that the hour entries have been entered on
 */
class HourEntryRecentProject extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'DateLastUsed',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/HourEntryRecentProjects';
}

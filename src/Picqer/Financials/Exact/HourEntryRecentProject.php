<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentProjects
 *
 * @property string $ProjectId Primary key
 * @property string $DateLastUsed Date last used
 * @property string $ProjectCode Code of project
 * @property string $ProjectDescription Description of project
 */
class HourEntryRecentProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'DateLastUsed',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/HourEntryRecentProjects';
}

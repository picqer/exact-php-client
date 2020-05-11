<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentProjects
 *
 * @property string $ProjectId Primary key
 * @property string $DateLastUsed Date last used
 * @property string $ProjectCode Code of project
 * @property string $ProjectDescription Description of project
 */
class CostEntryRecentProject extends Model
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

    protected $url = 'read/project/CostEntryRecentProjects';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjects
 *
 * @property string $ProjectId GUID id of the project
 * @property string $ProjectCode Code of the project
 * @property string $ProjectDescription Description of the project
 */
class TimeAndBillingEntryProject extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjects';
}

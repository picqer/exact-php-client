<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProjectsByAccountAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjectsByAccountAndDate
 *
 * @property string $ProjectId GUID id of the project
 * @property string $ProjectCode Code of the project
 * @property string $ProjectDescription Description of the project
 */
class TimeAndBillingEntryProjectsByAccountAndDate extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjectsByAccountAndDate';
}

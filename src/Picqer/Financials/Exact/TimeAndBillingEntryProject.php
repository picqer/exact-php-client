<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjects
 *
 * @property string $ProjectId Primary key
 * @property string $ProjectCode Code
 * @property string $ProjectDescription Description
 */
class TimeAndBillingEntryProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjects';
}

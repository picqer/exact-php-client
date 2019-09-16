<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProjectsByDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjectsByDate
 *
 * @property string $ProjectId Primary key
 * @property string $ProjectCode Code
 * @property string $ProjectDescription Description
 */
class TimeAndBillingEntryProjectsByDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjectsByDate?checkDate={Edm.DateTime}';
}

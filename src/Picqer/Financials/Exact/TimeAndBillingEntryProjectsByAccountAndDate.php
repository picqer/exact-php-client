<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProjectsByAccountAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjectsByAccountAndDate
 *
 * @property string $ProjectId Primary key
 * @property string $ProjectCode Code
 * @property string $ProjectDescription Description
 */
class TimeAndBillingEntryProjectsByAccountAndDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjectsByAccountAndDate?accountId={Edm.Guid}&checkDate={Edm.DateTime}';
}

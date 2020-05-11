<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingAccountDetail.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingAccountDetails
 *
 * @property string $ID Primary key
 * @property string $Name Name
 */
class TimeAndBillingAccountDetail extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Name',
    ];

    protected $url = 'read/project/TimeAndBillingAccountDetails';
}

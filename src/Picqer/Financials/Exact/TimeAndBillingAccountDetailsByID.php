<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingAccountDetailsByID.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingAccountDetailsByID
 *
 * @property string $ID Primary key
 * @property string $Name Name
 */
class TimeAndBillingAccountDetailsByID extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Name',
    ];

    protected $url = 'read/project/TimeAndBillingAccountDetailsByID?accountId={Edm.Guid}';
}

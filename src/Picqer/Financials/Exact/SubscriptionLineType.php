<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionLineType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionLineTypes
 *
 * @property int $ID Primary key
 * @property string $Description Description
 */
class SubscriptionLineType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
    ];

    protected $url = 'subscription/SubscriptionLineTypes';
}

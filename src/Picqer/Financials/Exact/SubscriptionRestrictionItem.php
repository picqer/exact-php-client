<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionRestrictionItem.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionRestrictionItems
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $Item Item linked to the restriction
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Subscription Reference to subscription
 * @property string $SubscriptionDescription Description of subscription
 * @property int $SubscriptionNumber Number of subscription
 */
class SubscriptionRestrictionItem extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Subscription',
        'SubscriptionDescription',
        'SubscriptionNumber',
    ];

    protected $url = 'subscription/SubscriptionRestrictionItems';
}

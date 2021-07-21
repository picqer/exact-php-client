<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionRestrictionItem.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionRestrictionItems
 *
 * @property string $ID Primary key
 * @property string $Created Date and time when the subscription restriction was created
 * @property string $Creator ID of user that created the subscription restriction
 * @property string $CreatorFullName Full name of user that created the subscription restriction
 * @property int $Division Division code
 * @property string $Item Id of item linked to the subscription restriction
 * @property string $ItemCode Code of item that linked to the subscription restriction
 * @property string $ItemDescription Description of item that linked to the subscription restriction
 * @property string $Modified Last modified date of subscription restriction
 * @property string $Modifier ID of last user that modified the subscription restriction
 * @property string $ModifierFullName Full name of last user that modified the subscription restriction
 * @property string $Subscription Subscription ID that the restriction is referenced to
 * @property string $SubscriptionDescription Subscription description that the restriction is referenced to
 * @property int $SubscriptionNumber Subscription number that the restriction is referenced to
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

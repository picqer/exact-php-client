<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionRestrictionItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionRestrictionItems
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Int32 $Division Division code
 * @property Guid $Item Item linked to the restriction
 * @property String $ItemCode Code of item
 * @property String $ItemDescription Description of item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property Guid $Subscription Reference to subscription
 * @property String $SubscriptionDescription Description of subscription
 * @property Int32 $SubscriptionNumber Number of subscription
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
        'SubscriptionNumber'
    ];

    protected $url = 'subscription/SubscriptionRestrictionItems';

}

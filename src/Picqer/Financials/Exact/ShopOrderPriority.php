<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderPriority.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderPriorities
 *
 * @property string $ID Primary key
 * @property int $Division
 * @property int $Mode 10 : Automatic, 20:Manual, 30:Expedited
 * @property int $Priority Priority of the shop order
 * @property string $ShopOrder
 */
class ShopOrderPriority extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Division',
        'Mode',
        'Priority',
        'ShopOrder',
    ];

    protected $url = 'manufacturing/ShopOrderPriorities';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncShopOrderSubOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncManufacturingShopOrderSubOrders
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $ID Primary key
 * @property int $Level Level of the sub shop order within the shop order structure
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $ShopOrder Reference to ShopOrders for the current shop order
 * @property string $ShopOrderMain Reference to ShopOrders for main shop order
 * @property int $ShopOrderMainNumber Number of main shop order
 * @property string $ShopOrderMaterialPlan Reference to ShopOrderMaterialPlans
 * @property int $ShopOrderNumber Number of the current shop order
 * @property string $ShopOrderParent Reference to ShopOrders for parent shop order
 * @property int $ShopOrderParentNumber Number of parent shop order
 */
class SyncShopOrderSubOrder extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'ID',
        'Level',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ShopOrder',
        'ShopOrderMain',
        'ShopOrderMainNumber',
        'ShopOrderMaterialPlan',
        'ShopOrderNumber',
        'ShopOrderParent',
        'ShopOrderParentNumber',
    ];

    protected $url = 'sync/Manufacturing/ShopOrderSubOrders';
}

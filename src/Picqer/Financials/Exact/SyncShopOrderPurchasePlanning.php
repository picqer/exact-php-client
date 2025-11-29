<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncShopOrderPurchasePlanning.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncManufacturingShopOrderPurchasePlanning
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property float $Factor Factor
 * @property int $FactorType Conversion factor type between produced item and Subcontract purchase Unit
 * @property string $ID Primary key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PurchaseOrder Reference to PurchaseOrderLines
 * @property int $PurchaseOrderNumber Number of the purchase order
 * @property float $Quantity Quantity
 * @property string $ShopOrder Reference to ShopOrders
 * @property string $ShopOrderMaterialPlan Reference to ShopOrderMaterialPlans
 * @property int $ShopOrderNumber Unique number to indentify the shop order
 * @property string $ShopOrderRoutingStepPlan Reference to ShopOrderRoutingStepPlans
 */
class SyncShopOrderPurchasePlanning extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Factor',
        'FactorType',
        'ID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PurchaseOrder',
        'PurchaseOrderNumber',
        'Quantity',
        'ShopOrder',
        'ShopOrderMaterialPlan',
        'ShopOrderNumber',
        'ShopOrderRoutingStepPlan',
    ];

    protected $url = 'sync/Manufacturing/ShopOrderPurchasePlanning';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehousePlanningDetails.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehousePlanningDetails
 *
 * @property string $Item Primary key
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $PlannedDate Date which quantity in stock is planned to change
 * @property float $PlannedQuantity Amount by which quantity in stock is planned to change
 * @property string $PlanningSourceDescription Human readable description of the PlanningSource (translated to user's language) - Examples: Purchase Order, Sales Order, Shop Order, etc.
 * @property string $PlanningSourceID ID of the PlanningSource
 * @property int $PlanningSourceLineNumber Line number of the PlanningSource if the PlanningSourceType supports line numbers
 * @property int $PlanningSourceNumber Human readable number of the PlanningSource - Examples: Shop order number '201600001' or Sales order number '2016020001'
 * @property string $PlanningSourceUrl REST API URL of this specific PlanningSource and PlanningSourceID (Assembly orders and warehouse transfers not supported over REST)
 * @property int $PlanningType Type of the PlanningSource - 120=GoodsDelivery, 124=WarehouseTransferDelivery, 130=GoodsReceipt, 134=WarehouseTransferReceipt, 140=ShopOrderStockReceipt, 147=ShopOrderByProductReceipt, 150=ShopOrderRequirement, 160=AssemblyOrderReceipt, 165=AssemblyOrderIssue
 * @property string $PlanningTypeDescription Human readable description of the PlanningSourceType (translated to user's language) - Examples: 'Shop order stock receipt' or 'Goods delivery'
 * @property string $Warehouse ID of warehouse
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class ItemWarehousePlanningDetails extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Item',
        'ItemCode',
        'ItemDescription',
        'PlannedDate',
        'PlannedQuantity',
        'PlanningSourceDescription',
        'PlanningSourceID',
        'PlanningSourceLineNumber',
        'PlanningSourceUrl',
        'PlanningType',
        'PlanningTypeDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehousePlanningDetails';
}

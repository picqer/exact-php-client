<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehousePlanningDetail
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehousePlanningDetails
 * 
 * @property Guid $Item ID of item
 * @property String $ItemCode Code of item
 * @property String $ItemDescription Description of item
 * @property DateTime $PlannedDate Date which quantity in stock is planned to change
 * @property Double $PlannedQuantity Amount by which quantity in stock is planned to change
 * @property String $PlanningSourceDescription Human readable description of the PlanningSource (translated to user's language) - Examples: Purchase Order, Sales Order, Shop Order, etc.
 * @property Guid $PlanningSourceID ID of the PlanningSource
 * @property Int32 $PlanningSourceLineNumber Line number of the PlanningSource if the PlanningSourceType supports line numbers
 * @property Int32 $PlanningSourceNumber Human readable number of the PlanningSource - Examples: Shop order number '201600001' or Sales order number '2016020001'
 * @property String $PlanningSourceUrl REST API URL of this specific PlanningSource and PlanningSourceID (Assembly orders and warehouse transfers not supported over REST)
 * @property Int32 $PlanningType Type of the PlanningSource - 120=GoodsDelivery, 124=WarehouseTransferDelivery, 130=GoodsReceipt, 134=WarehouseTransferReceipt, 140=ShopOrderStockReceipt, 147=ShopOrderByProductReceipt, 150=ShopOrderRequirement, 160=AssemblyOrderReceipt, 165=AssemblyOrderIssue
 * @property String $PlanningTypeDescription Human readable description of the PlanningSourceType (translated to user's language) - Examples: 'Shop order stock receipt' or 'Goods delivery'
 * @property Guid $Warehouse ID of warehouse
 * @property String $WarehouseCode Code of warehouse
 * @property String $WarehouseDescription Description of warehouse
 */
class ItemWarehousePlanningDetail extends Model
{
    use Query\Findable;

    protected $fillable = [
        'Item',
        'ItemCode',
        'ItemDescription',
        'PlannedDate',
        'PlannedQuantity',
        'PlanningSourceDescription',
        'PlanningSourceID',
        'PlanningSourceLineNumber',
        'PlanningSourceNumber',
        'PlanningSourceUrl',
        'PlanningType',
        'PlanningTypeDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription'
    ];

    protected $url = 'inventory/ItemWarehousePlanningDetails';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouse
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouses
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $CurrentStock Quantity that is currently on stock, sales/purchase orders excluded
 * @property string $DefaultStorageLocation This is a default storage location
 * @property string $DefaultStorageLocationCode Default storage location's code
 * @property string $DefaultStorageLocationDescription Default storage location's description
 * @property int $Division Division code
 * @property string $item Item ID
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property bool $ItemIsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property string $ItemUnit The standard unit code of this item
 * @property string $ItemUnitDescription Description of item's unit
 * @property float $MaximumStock Maximum number of stock could enter warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $PlannedStockIn The quantity still open to be received based on i.e. purchase orders and assembly orders.
 * @property float $PlannedStockOut The quantity still open to be delivered based on i.e. sales orders and assembly orders.
 * @property string $PlanningDetailsUrl URL of the stock planning details of this record
 * @property float $ProjectedStock The quantity of stock projected given all planned future stock changes
 * @property float $ReorderPoint Reorder point when stock depletes
 * @property float $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property float $SafetyStock Safety stock
 * @property string $StorageLocationUrl URL pointing to details of which storage locations this ItemWarehouse's stock is located
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class ItemWarehouse extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'CurrentStock',
        'DefaultStorageLocation',
        'DefaultStorageLocationCode',
        'DefaultStorageLocationDescription',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemIsFractionAllowedItem',
        'ItemUnit',
        'ItemUnitDescription',
        'MaximumStock',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PlannedStockIn',
        'PlannedStockOut',
        'PlanningDetailsUrl',
        'ProjectedStock',
        'ReorderPoint',
        'ReservedStock',
        'SafetyStock',
        'StorageLocationUrl',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouses';
}

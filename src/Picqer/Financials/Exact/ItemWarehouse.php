<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouse.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouses
 *
 * @property string $ID A guid that is the unique identifier of the linkage between item and warehouse
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $CurrentStock Quantity that is currently in stock, included the stock committed to sales order
 * @property string $DefaultStorageLocation This is a default storage location
 * @property string $DefaultStorageLocationCode Default storage location's code
 * @property string $DefaultStorageLocationDescription Default storage location's description
 * @property int $Division Division code
 * @property string $Item Item ID
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $ItemEndDate Together with ItemStartDate this determines if the item is active
 * @property bool $ItemIsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property bool $ItemIsStockItem Indicates if this is a stock item
 * @property string $ItemStartDate Together with ItemEndDate this determines if the item is active
 * @property string $ItemUnit The standard unit code of this item
 * @property string $ItemUnitDescription Description of item's unit
 * @property float $MaximumStock Maximum quantity of items that you want in warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $OrderPolicy Order Policy options: 1-Lot for lot, 2-Fixed order quantity, 3-Min / Max, 4-Order
 * @property int $Period Period that work together with replenishment in MRP
 * @property float $PlannedStockIn The quantity still open to be received based on i.e. purchase orders and assembly orders.
 * @property float $PlannedStockOut The quantity still open to be delivered based on i.e. sales orders and assembly orders.
 * @property string $PlanningDetailsUrl URL of the stock planning details of this record
 * @property float $ProjectedStock The quantity of stock projected given all planned future stock changes
 * @property float $ReorderPoint Quantity of items as an indication of when you need to reorder more stock for the warehouse
 * @property float $ReorderQuantity Reorder quantity that work together with replenishment in MRP
 * @property int $ReplenishmentType Replenishment options: 1-Purchase, 2-Assemble, 3-Make, 4-Transfer, 5-No replenishment advice
 * @property float $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property float $SafetyStock Minimum quantity of items you must have in stock
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
        'ItemEndDate',
        'ItemIsFractionAllowedItem',
        'ItemIsStockItem',
        'ItemStartDate',
        'ItemUnit',
        'ItemUnitDescription',
        'MaximumStock',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderPolicy',
        'Period',
        'PlannedStockIn',
        'PlannedStockOut',
        'PlanningDetailsUrl',
        'ProjectedStock',
        'ReorderPoint',
        'ReorderQuantity',
        'ReplenishmentType',
        'ReservedStock',
        'SafetyStock',
        'StorageLocationUrl',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouses';
}

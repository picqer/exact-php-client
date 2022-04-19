<?php

namespace Picqer\Financials\Exact;

/**
 * Class InventoryItemWarehouse.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncInventoryItemWarehouses
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DefaultStorageLocation This is a default storage location
 * @property string $DefaultStorageLocationCode Default storage location's code
 * @property string $DefaultStorageLocationDescription Default storage location's description
 * @property int $Division Division code
 * @property string $ID A guid that is the unique identifier of the linkage between item and warehouse
 * @property string $Item Item ID
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property float $MaximumStock Maximum quantity of items that you want in warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $OrderPolicy Order Policy options: 1-Lot for lot, 2-Fixed order quantity, 3-Min / Max, 4-Order
 * @property int $Period Period that work together with replenishment in MRP
 * @property float $ReorderPoint Quantity of items as an indication of when you need to reorder more stock for the warehouse
 * @property float $ReorderQuantity Reorder quantity that work together with replenishment in MRP
 * @property int $ReplenishmentType Replenishment options: 1-Purchase, 2-Assemble, 3-Make, 4-Transfer, 5-No replenishment advice
 * @property float $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property float $SafetyStock Minimum quantity of items you must have in stock
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class InventoryItemWarehouse extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'DefaultStorageLocation',
        'DefaultStorageLocationCode',
        'DefaultStorageLocationDescription',
        'Division',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'MaximumStock',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderPolicy',
        'Period',
        'ReorderPoint',
        'ReorderQuantity',
        'ReplenishmentType',
        'ReservedStock',
        'SafetyStock',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'sync/Inventory/ItemWarehouses';
}

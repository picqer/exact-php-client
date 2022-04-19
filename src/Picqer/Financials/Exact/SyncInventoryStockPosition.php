<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncInventoryStockPosition.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncInventoryStockPositions
 *
 * @property int $Timestamp Timestamp
 * @property float $CurrentStock Number of items in stock
 * @property int $Division Division code
 * @property float $FreeStock Quantity of available stock
 * @property string $ID Primary Key
 * @property string $ItemCode Code of the item
 * @property string $ItemDescription Description of the item
 * @property string $ItemId A guid that is the unique identifier of the item
 * @property float $PlanningIn Number of items that are planned to come in
 * @property float $PlanningOut Number of items that are planned to go out
 * @property float $ProjectedStock The quantity of stock projected given all planned future stock changes
 * @property float $ReorderPoint Quantity of items as an indication of when you need to reorder more stock for the warehouse
 * @property float $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property string $UnitCode Code of item unit
 * @property string $UnitDescription Description of the item unit
 * @property string $Warehouse A guid that is the unique identifier of the warehouse
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class SyncInventoryStockPosition extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'CurrentStock',
        'Division',
        'FreeStock',
        'ID',
        'ItemCode',
        'ItemDescription',
        'ItemId',
        'PlanningIn',
        'PlanningOut',
        'ProjectedStock',
        'ReorderPoint',
        'ReservedStock',
        'UnitCode',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'sync/Inventory/StockPositions';
}

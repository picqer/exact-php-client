<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncStorageLocationStockPosition.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncInventoryStorageLocationStockPositions
 *
 * @property int $Timestamp Timestamp
 * @property int $Division Division code
 * @property string $ID Primary key
 * @property string $Item Item
 * @property string $ItemCode Code of the item
 * @property string $ItemDescription Description of the item
 * @property float $Stock Stock
 * @property string $StorageLocation Storage location
 * @property string $StorageLocationCode Code of the storage location
 * @property string $StorageLocationDescription Description of the storage location
 * @property string $UnitCode Code of the unit for the item
 * @property string $UnitDescription Description of the unit for the item
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of the warehouse
 * @property string $WarehouseDescription Description of the warehouse
 */
class SyncStorageLocationStockPosition extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Division',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Stock',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'UnitCode',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'sync/Inventory/StorageLocationStockPositions';
}

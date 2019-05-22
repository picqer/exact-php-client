<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouseStorageLocation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouseStorageLocations
 *
 * @property string $ID Uniquely identifies the item, warehouse, storage location combination
 * @property int $IsFractionAllowedItem Does the item allow partial quantities (1.75 meters)
 * @property string $Item Item
 * @property string $ItemBarcode Barcode of the item of this stock quantity
 * @property string $ItemCode Code of the item of this stock quantity
 * @property string $ItemDescription Description of the item of this stock quantity
 * @property string $ItemUnit Unit of the item
 * @property string $ItemUnitDescription Unit description of the item
 * @property float $Stock Number of items in stock
 * @property string $StorageLocation Storage location of this stock
 * @property string $StorageLocationCode Code of the storage location of this stock quantity
 * @property string $StorageLocationDescription Description of the storage location of this stock quantity
 * @property string $Warehouse ID of Warehouse
 * @property string $WarehouseCode Code of the warehouse of this stock quantity
 * @property string $WarehouseDescription Description of the warehouse of this stock quantity
 */
class ItemWarehouseStorageLocation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'IsFractionAllowedItem',
        'Item',
        'ItemBarcode',
        'ItemCode',
        'ItemDescription',
        'ItemUnit',
        'ItemUnitDescription',
        'Stock',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouseStorageLocations';
}

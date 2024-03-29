<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouseStorageLocation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouseStorageLocations
 *
 * @property string $ID Uniquely identifies the item, warehouse, storage location combination
 * @property int $IsFractionAllowedItem Does the item allow partial quantities (1.75 meters)
 * @property int $IsStockItem Indicates if this is a stock item
 * @property string $Item Item
 * @property string $ItemCode Code of the item of this stock quantity
 * @property string $ItemDescription Description of the item of this stock quantity
 * @property string $ItemEndDate Together with ItemStartDate this determines if the item is active
 * @property string $ItemStartDate Together with ItemEndDate this determines if the item is active
 * @property string $ItemUnit Unit of the item
 * @property string $ItemUnitDescription Unit description of the item
 * @property float $Stock Number of items in stock
 * @property string $StorageLocation Storage location of this stock
 * @property string $StorageLocationCode Code of the storage location of this stock quantity
 * @property string $StorageLocationDescription Description of the storage location of this stock quantity
 * @property int $StorageLocationSequenceNumber Sequence number of this stock quantity (Premium Only)
 * @property string $Warehouse ID of Warehouse
 * @property string $WarehouseCode Code of the warehouse of this stock quantity
 * @property string $WarehouseDescription Description of the warehouse of this stock quantity
 */
class ItemWarehouseStorageLocation extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'IsFractionAllowedItem',
        'IsStockItem',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemEndDate',
        'ItemStartDate',
        'ItemUnit',
        'ItemUnitDescription',
        'Stock',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'StorageLocationSequenceNumber',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouseStorageLocations';
}

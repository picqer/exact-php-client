<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouseStorageLocation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouseStorageLocations
 * 
 * @property Guid $Item Item
 * @property Byte $IsFractionAllowedItem Does the item allow partial quantities (1.75 meters)
 * @property String $ItemCode Code of the item of this stock quantity
 * @property String $ItemDescription Description of the item of this stock quantity
 * @property String $ItemUnit Unit of the item
 * @property String $ItemUnitDescription Unit description of the item
 * @property Double $Stock Number of items in stock
 * @property Guid $StorageLocation Storage location of this stock
 * @property String $StorageLocationCode Code of the storage location of this stock quantity
 * @property String $StorageLocationDescription Description of the storage location of this stock quantity
 * @property Guid $Warehouse ID of Warehouse
 * @property String $WarehouseCode Code of the warehouse of this stock quantity
 * @property String $WarehouseDescription Description of the warehouse of this stock quantity
 */
class ItemWarehouseStorageLocation extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Item';

    protected $fillable = [
        'Item',
        'IsFractionAllowedItem',
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
        'WarehouseDescription'
    ];

    protected $url = 'inventory/ItemWarehouseStorageLocations';

}
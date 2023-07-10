<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncItemStorageLocation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncInventoryItemStorageLocations
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $ID A guid that is the unique identifier of the linkage between item and warehouse
 * @property string $Item Item ID
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property float $MaximumStock Maximum quantity of items that you want in warehouse
 * @property float $MinimumStock Minimum quantity of items that you want in warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $StorageLocation This is a storage location
 * @property string $StorageLocationCode Storage location's code
 * @property string $StorageLocationDescription Storage location's description
 * @property int $Type Item storage location type options: 1-Pick location, 2-Bulk location
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 */
class SyncItemStorageLocation extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'MaximumStock',
        'MinimumStock',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Type',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'sync/Inventory/ItemStorageLocations';
}

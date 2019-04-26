<?php

namespace Picqer\Financials\Exact;

/**
 * Class WarehouseTransferLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryWarehouseTransferLines
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Item Item ID
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $Quantity Quantity of transfer
 * @property string $StorageLocationFrom ID of storage location to transfer item from (Premium Only)
 * @property string $StorageLocationFromCode Code of storage location to transfer item from
 * @property string $StorageLocationFromDescription Description of storage location to transfer item from
 * @property string $StorageLocationTo ID of storage location to transfer item to (Premium Only)
 * @property string $StorageLocationToCode Code of storage location to transfer item to
 * @property string $StorageLocationToDescription Description of storage location to transfer item to
 * @property string $TransferID Entry number of the stock transaction
 * @property string $UnitCode The standard unit code of this item
 * @property string $UnitDescription Description of item's unit
 */
class WarehouseTransferLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Quantity',
        'StorageLocationFrom',
        'StorageLocationFromCode',
        'StorageLocationFromDescription',
        'StorageLocationTo',
        'StorageLocationToCode',
        'StorageLocationToDescription',
        'TransferID',
        'UnitCode',
        'UnitDescription',
    ];

    protected $url = 'inventory/WarehouseTransferLines';
}

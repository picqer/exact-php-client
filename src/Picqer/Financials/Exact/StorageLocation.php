<?php

namespace Picqer\Financials\Exact;

/**
 * Class StorageLocation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStorageLocations
 *
 * @property string $ID Primary key
 * @property string $Code Code of the storage location
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the storage location
 * @property int $Division Division code
 * @property int $Main Indicates if this is the main storage location. There's always exactly one main storage location per warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Warehouse Code
 * @property string $WarehouseDescription Description of warehouse
 */
class StorageLocation extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/StorageLocations';

}
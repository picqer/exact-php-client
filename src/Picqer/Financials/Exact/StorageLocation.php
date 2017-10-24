<?php

namespace Picqer\Financials\Exact;

/**
 * Class StorageLocation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStorageLocations
 *
 * @property Guid $ID Primary key
 * @property String $Code Code of the storage location
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the storage location
 * @property Int32 $Division Division code
 * @property Byte $Main Indicates if this is the main storage location. There's always exactly one main storage location per warehouse
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $Warehouse Warehouse ID
 * @property String $WarehouseCode Warehouse Code
 * @property String $WarehouseDescription Description of warehouse
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
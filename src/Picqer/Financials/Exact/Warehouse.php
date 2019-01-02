<?php

namespace Picqer\Financials\Exact;

/**
 * Class Warehouse
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryWarehouses
 *
 * @property string $ID Primary key
 * @property string $Code Code of the warehouse
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DefaultStorageLocation The default storage location of this warehouse. Warehouses can have a default storage location in packages Manufacturing Premium or Wholesale Premium
 * @property string $DefaultStorageLocationCode Default storage location's code
 * @property string $DefaultStorageLocationDescription Default storage location's description
 * @property string $Description The description of the warehouse
 * @property int $Division Division code
 * @property string $EMail Email address
 * @property int $Main Indicates if this is the main warehouse. There's always exactly one main warehouse per administration
 * @property string $ManagerUser User reponsible for the warehouse
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $UseStorageLocations Indicates if this warehouse is using storage locations. The storage locations will not be removed when when this is deactivated
 */
class Warehouse extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'DefaultStorageLocation',
        'DefaultStorageLocationCode',
        'DefaultStorageLocationDescription',
        'Description',
        'Division',
        'EMail',
        'Main',
        'ManagerUser',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'UseStorageLocations',
    ];

    protected $url = 'inventory/Warehouses';

}
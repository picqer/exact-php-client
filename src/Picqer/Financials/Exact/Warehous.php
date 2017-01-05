<?php namespace Picqer\Financials\Exact;

/**
 * Class Warehous
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryWarehouses
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the warehouse
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description The description of the warehouse
 * @property Int32 $Division Division code
 * @property String $EMail Email address
 * @property Byte $Main Indicates if this is the main warehouse. There's always exactly one main warehouse per administration
 * @property Guid $ManagerUser User reponsible for the warehouse
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Byte $UseStorageLocations Indicates if this warehouse is using storage locations. The storage locations will not be removed when when this is deactivated
 */
class Warehous extends Model
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
        'EMail',
        'Main',
        'ManagerUser',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'UseStorageLocations'
    ];

    protected $url = 'inventory/Warehouses';

}

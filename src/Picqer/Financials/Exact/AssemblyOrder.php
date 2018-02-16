<?php namespace Picqer\Financials\Exact;

/**
 * Class AssemblyOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryAssemblyOrders
 *
 * @property Guid $ID Primary key
 * @property DateTime $AssemblyDate Planned date for assembly of the item
 * @property String $Description Description of assembly order
 * @property Int32 $Division Division code
 * @property Double $FinishedQuantity Quantity of items that have actually been assembled
 * @property Guid $Item Reference to item
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of item
 * @property String $Notes Notes of the assembly order
 * @property DateTime $OrderDate Date of the assembly order is initiated
 * @property Int32 $OrderNumber Assembly order number
 * @property Int32 $OrderStatus Assembly order status: 20 = Open, 30 = Partial, 50 = Complete
 * @property PartItems $PartItems Collection of part items for assembly order
 * @property Double $PlannedQuantity Planned quantity of the item to be assembled
 * @property Guid $StorageLocation Reference to storage location
 * @property String $StorageLocationCode Storage location code
 * @property String $StorageLocationDescription Storage location description
 * @property Guid $Warehouse Warehouse
 * @property String $WarehouseCode Code of Warehouse
 * @property String $WarehouseDescription Description of Warehouse
 */
class AssemblyOrder extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AssemblyDate',
        'Description',
        'Division',
        'FinishedQuantity',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Notes',
        'OrderDate',
        'OrderNumber',
        'OrderStatus',
        'PartItems',
        'PlannedQuantity',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/AssemblyOrders';

}

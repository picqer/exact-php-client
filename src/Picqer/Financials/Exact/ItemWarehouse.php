<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouse
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouses
 *
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Double $CurrentStock Quantity that is currently on stock, sales/purchase orders excluded
 * @property Guid $DefaultStorageLocation This is a default storage location
 * @property String $DefaultStorageLocationCode Default storage location's code
 * @property String $DefaultStorageLocationDescription Default storage location's description
 * @property Int32 $Division Division code
 * @property Guid $item Item ID
 * @property String $ItemCode Code of item
 * @property String $ItemDescription Description of item
 * @property Boolean $ItemIsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property String $ItemUnit The standard unit code of this item
 * @property String $ItemUnitDescription Description of item's unit
 * @property Double $MaximumStock Maximum number of stock could enter warehouse
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $PlannedStockIn The quantity still open to be received based on i.e. purchase orders and assembly orders.
 * @property Double $PlannedStockOut The quantity still open to be delivered based on i.e. sales orders and assembly orders.
 * @property String $PlanningDetailsUrl URL of the stock planning details of this record
 * @property Double $ProjectedStock The quantity of stock projected given all planned future stock changes
 * @property Double $ReorderPoint Reorder point when stock depletes
 * @property Double $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property Double $SafetyStock Safety stock
 * @property String $StorageLocationUrl URL pointing to details of which storage locations this ItemWarehouse's stock is located
 * @property Guid $Warehouse Warehouse ID
 * @property String $WarehouseCode Code of warehouse
 * @property String $WarehouseDescription Description of warehouse
 */
class ItemWarehouse extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'CurrentStock',
        'DefaultStorageLocation',
        'DefaultStorageLocationCode',
        'DefaultStorageLocationDescription',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemIsFractionAllowedItem',
        'ItemUnit',
        'ItemUnitDescription',
        'MaximumStock',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PlannedStockIn',
        'PlannedStockOut',
        'PlanningDetailsUrl',
        'ProjectedStock',
        'ReorderPoint',
        'ReservedStock',
        'SafetyStock',
        'StorageLocationUrl',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouses';
}

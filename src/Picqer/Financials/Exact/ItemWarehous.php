<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehous
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
 * @property Int32 $Division Division code
 * @property Guid $Item Item ID
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
 * @property Double $ReorderPoint Reorder point when stock depletes
 * @property Double $ReservedStock The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property Double $SafetyStock Safety stock
 * @property Guid $Warehouse Warehouse ID
 * @property String $WarehouseDescription Description of warehouse
 */
class ItemWarehous extends Model
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
        'Division',
        'Item',
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
        'ReorderPoint',
        'ReservedStock',
        'SafetyStock',
        'Warehouse',
        'WarehouseDescription'
    ];

    protected $url = 'inventory/ItemWarehouses';

}

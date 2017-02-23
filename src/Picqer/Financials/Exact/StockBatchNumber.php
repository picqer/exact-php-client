<?php namespace Picqer\Financials\Exact;

/**
 * Class StockBatchNumber
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockBatchNumbers
 * 
 * @property Guid $ID Primary key
 * @property String $BatchNumber Human readable batch number
 * @property Guid $BatchNumberID Batch number ID
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $DraftStockTransactionID ID representing a group of batch numbers being reserved for use in a subsequent stock transaction
 * @property DateTime $EndDate End date of effective period for batch number
 * @property Byte $IsBlocked Boolean value indicating whether or not the batch number is blocked
 * @property Byte $IsDraft Boolean value indicating if this batch number is being reserved
 * @property Guid $Item Item
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $Quantity Quantity of this batch number entering or leaving inventory
 * @property String $Remarks Remarks
 * @property Guid $StockCountLine ID of stock count entry
 * @property Guid $StockTransactionID ID of the stock transaction in which this batch number was used
 * @property Int32 $StockTransactionType Type of stock transaction associated with this batch number.Available values:10 = Opening balance120 = Goods delivery121 = Sales return122 = Stock out (Drop shipment)123 = Stock in (Drop shipment return)124 = Warehouse transfer delivery125 = Location Transfer Delivery130 = Goods receipt131 = Purchase return132 = Stock in (Drop shipment)133 = Stock out (Drop shipment return)134 = Warehouse transfer receipt135 = Location Transfer Receipt140 = Shop order stock receipt141 = Shop order stock reversal147 = Shop order by-product receipt148 = Shop order by-product reversal150 = Requirement issue151 = Requirement reversal155 = Subcontract issue156 = Subcontract return160 = Receipt (Assembly)161 = Return receipt (Disassembly)165 = Issue (Assembly)166 = Return issue (Disassembly)180 = Stock revaluation181 = Financial revaluation195 = Stock count196 = Adjust stock - out197 = Adjust stock - in
 * @property Guid $StorageLocation Storage location which this batch number is entering or leaving
 * @property String $StorageLocationCode Code of the storage location which this batch number is entering or leaving
 * @property String $StorageLocationDescription Description of the storage location which this batch number is entering or leaving
 * @property Guid $Warehouse Warehouse which this batch number is entering or leaving
 * @property String $WarehouseCode Code of the warehouse which this batch number is entering or leaving
 * @property String $WarehouseDescription Description of the warehouse which this batch number is entering or leaving
 */
class StockBatchNumber extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumber',
        'BatchNumberID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'DraftStockTransactionID',
        'EndDate',
        'IsBlocked',
        'IsDraft',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Quantity',
        'Remarks',
        'StockCountLine',
        'StockTransactionID',
        'StockTransactionType',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription'
    ];

    protected $url = 'inventory/StockBatchNumbers';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncStockSerialBatchNumber.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncInventoryStockSerialBatchNumbers
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $DraftStockTransactionLocation ID of draft stock transaction storage location associated with this serial or batch number.
 * @property string $DraftTransactionID ID representing a group of serial or batch numbers being reserved for use in a subsequent stock transaction
 * @property string $ID Primary Key
 * @property int $IsDraft Boolean value indicating if this serial or batch number is being reserved
 * @property string $Item Item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $ParentID ID of the main item. Only applicable for assembled item
 * @property string $PicklistLine ID of picking list associated with this serial or batch number.
 * @property string $PickOrderLine ID of pick order associated with this serial or batch number.
 * @property string $PurchaseTransaction ID of purchase transaction associated with this serial or batch number.
 * @property float $Quantity Quantity of this serial or batch number entering or leaving inventory
 * @property string $Remarks Remarks
 * @property string $SalesReturnLine ID of sales return associated with this serial or batch number.
 * @property string $SalesTransaction ID of sales transaction associated with this serial or batch number.
 * @property string $SerialBatchNumber Serial or Batch Number ID
 * @property string $StockCountLine ID of stock count entry
 * @property string $StockTransactionID ID of the stock transaction in which this serial or batch number was used
 * @property string $StockTransactionLocation ID of stock transaction location associated with this serial or batch number.
 * @property int $StockTransactionType Type of stock transaction associated with this serial or batch number.Available values:10 = Opening balance120 = Goods delivery121 = Sales return122 = Stock out (Drop shipment)123 = Stock in (Drop shipment return)124 = Warehouse transfer delivery125 = Location Transfer Delivery130 = Goods receipt131 = Purchase return132 = Stock in (Drop shipment)133 = Stock out (Drop shipment return)134 = Warehouse transfer receipt135 = Location Transfer Receipt140 = Shop order stock receipt141 = Shop order stock reversal147 = Shop order by-product receipt148 = Shop order by-product reversal150 = Requirement issue151 = Requirement reversal155 = Subcontract issue156 = Subcontract return160 = Receipt (Assembly)161 = Return receipt (Disassembly)165 = Issue (Assembly)166 = Return issue (Disassembly)180 = Stock revaluation181 = Financial revaluation195 = Stock count196 = Adjust stock - out197 = Adjust stock - in200 = Trade-in
 * @property string $StorageLocation Storage location which this serial or batch number is entering or leaving
 * @property string $StorageLocationCode Code of the storage location which this serial or batch number is entering or leaving
 * @property string $StorageLocationDescription Description of the storage location which this serial or batch number is entering or leaving
 * @property string $Warehouse Warehouse which this serial or batch number is entering or leaving
 * @property string $WarehouseCode Code of the warehouse which this serial or batch number is entering or leaving
 * @property string $WarehouseDescription Description of the warehouse which this serial or batch number is entering or leaving
 * @property string $WarehouseTransferLine ID of warehouse transfer associated with this serial or batch number.
 */
class SyncStockSerialBatchNumber extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'DraftStockTransactionLocation',
        'DraftTransactionID',
        'ID',
        'IsDraft',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ParentID',
        'PicklistLine',
        'PickOrderLine',
        'PurchaseTransaction',
        'Quantity',
        'Remarks',
        'SalesReturnLine',
        'SalesTransaction',
        'SerialBatchNumber',
        'StockCountLine',
        'StockTransactionID',
        'StockTransactionLocation',
        'StockTransactionType',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'WarehouseTransferLine',
    ];

    protected $url = 'sync/Inventory/StockSerialBatchNumbers';
}

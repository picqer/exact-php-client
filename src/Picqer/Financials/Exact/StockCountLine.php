<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockCountLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCountLines
 *
 * @property string $ID Primary key
 * @property BatchNumbers $BatchNumbers The collection of batch numbers that belong to the items included in this stock count
 * @property float $CostPrice Cost price of the item that is used to create the stock count
 * @property string $CountedBy Counted by
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Item Reference to the item for which the stock is counted
 * @property string $ItemBarcode Item Barcode
 * @property string $ItemCode Item code
 * @property float $ItemCostPrice Current standard/actual item cost price
 * @property string $ItemDescription Description of item
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $QuantityDifference The difference between the current quantity in stock and the new quantity in stock. For example specify -1 for this field to correct the quantity if one item in stock is broken.
 * @property float $QuantityInStock The current quantity available in stock
 * @property float $QuantityNew The new quantity in stock. Use this field to correct the quantity when the items in stock are physically counted.
 * @property SerialNumbers $SerialNumbers The collection of serial numbers that belong to the items included in this stock count
 * @property int $Source Source of stock count entry: 1-Manual entry, 2-Import, 3-Stock count, 4-Web service
 * @property int $Status Stock count status: 12-Draft, 21-Processed
 * @property string $StockCountID Identifies the stock count. All the lines of a stock count have the same StockCountID
 * @property string $StockKeepingUnit Stock item's unit description
 * @property string $StorageLocation This property is package specific (Stock count can have multiple lines for the same item only if it is for multiple storage locations).
 * @property string $StorageLocationCode Storage location code
 * @property string $StorageLocationDescription Storage location description
 * @property string $Warehouse Warehouse
 */
class StockCountLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'CostPrice',
        'CountedBy',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Item',
        'ItemBarcode',
        'ItemCode',
        'ItemCostPrice',
        'ItemDescription',
        'ItemDivisable',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'QuantityDifference',
        'QuantityInStock',
        'QuantityNew',
        'SerialNumbers',
        'Source',
        'Status',
        'StockCountID',
        'StockKeepingUnit',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
    ];

    protected $url = 'inventory/StockCountLines';
}

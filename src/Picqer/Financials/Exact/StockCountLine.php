<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockCountLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCountLines
 *
 * @property Guid $ID Primary key
 * @property BatchNumbers $BatchNumbers The collection of batch numbers that belong to the items included in this stock count
 * @property Double $CostPrice Cost price of the item that is used to create the stock count
 * @property Guid $CountedBy Counted by
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $Item Reference to the item for which the stock is counted
 * @property String $ItemCode Item code
 * @property Double $ItemCostPrice Current standard/actual item cost price
 * @property String $ItemDescription Description of item
 * @property Boolean $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property Int32 $LineNumber Line number
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $QuantityDifference The difference between the current quantity in stock and the new quantity in stock. For example specify -1 for this field to correct the quantity if one item in stock is broken.
 * @property Double $QuantityInStock The current quantity available in stock
 * @property Double $QuantityNew The new quantity in stock. Use this field to correct the quantity when the items in stock are physically counted.
 * @property SerialNumbers $SerialNumbers The collection of serial numbers that belong to the items included in this stock count
 * @property Guid $StockCountID Identifies the stock count. All the lines of a stock count have the same StockCountID
 * @property String $StockKeepingUnit Stock item's unit description
 * @property Guid $StorageLocation This property is package specific (Stock count can have multiple lines for the same item only if it is for multiple storage locations).
 * @property String $StorageLocationCode Storage location code
 * @property String $StorageLocationDescription Storage location description
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
        'StockCountID',
        'StockKeepingUnit',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
    ];

    protected $url = 'inventory/StockCountLines';

}
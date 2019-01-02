<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockCount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCounts
 *
 * @property string $StockCountID Primary key
 * @property string $CountedBy Stock count user
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the stock count
 * @property int $Division Division code
 * @property int $EntryNumber Entry number of the stock transactions
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OffsetGLInventory Offset GL account of inventory
 * @property string $OffsetGLInventoryCode GLAccount code
 * @property string $OffsetGLInventoryDescription GLAccount description
 * @property int $Source Source of stock count entry: 1-Manual entry, 2-Import, 3-Stock count, 4-Web service
 * @property int $Status Stock count status: 12-Draft, 21-Processed
 * @property string $StockCountDate Stock count date
 * @property StockCountLines $StockCountLines Collection of stock count lines
 * @property int $StockCountNumber Human readable id of the stock count
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 */
class StockCount extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'StockCountID';

    protected $fillable = [
        'StockCountID',
        'CountedBy',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EntryNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OffsetGLInventory',
        'OffsetGLInventoryCode',
        'OffsetGLInventoryDescription',
        'Source',
        'Status',
        'StockCountDate',
        'StockCountLines',
        'StockCountNumber',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/StockCounts';

}
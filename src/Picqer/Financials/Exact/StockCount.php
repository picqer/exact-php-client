<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockCount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCounts
 *
 * @property Guid $StockCountID Primary key
 * @property Guid $CountedBy Stock count user
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the stock count
 * @property Int32 $Division Division code
 * @property Int32 $EntryNumber Entry number of the stock transactions
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $OffsetGLInventory Offset GL account of inventory
 * @property String $OffsetGLInventoryCode GLAccount code
 * @property String $OffsetGLInventoryDescription GLAccount description
 * @property Int16 $Source Source of stock count entry: 1-Manual entry, 2-Import, 3-Stock count, 4-Web service
 * @property Int16 $Status Stock count status: 12-Draft, 21-Processed
 * @property DateTime $StockCountDate Stock count date
 * @property StockCountLines $StockCountLines Collection of stock count lines
 * @property Int32 $StockCountNumber Human readable id of the stock count
 * @property Guid $Warehouse Warehouse
 * @property String $WarehouseCode Code of Warehouse
 * @property String $WarehouseDescription Description of Warehouse
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
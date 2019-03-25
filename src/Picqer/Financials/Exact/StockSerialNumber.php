<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockSerialNumber
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockSerialNumbers
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $DraftStockTransactionID ID representing a group of serial numbers being reserved for use in a subsequent stock transaction
 * @property string $EndDate End date of effective period for serial number
 * @property int $IsBlocked Boolean value indicating whether or not the serial number is blocked
 * @property int $IsDraft Boolean value indicating if this serial number is being reserved
 * @property string $Item Item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property string $SerialNumber Human readable serial number
 * @property string $SerialNumberID Serial number ID
 * @property string $StartDate Start date of effective period for serial number
 * @property string $StockCountLine ID of stock count entry
 * @property string $StockTransactionID ID of the stock transaction in which this serial number was used
 * @property int $StockTransactionType Type of stock transaction associated with this serial number.Available values:10 = Opening balance120 = Goods delivery121 = Sales return122 = Stock out (Drop shipment)123 = Stock in (Drop shipment return)124 = Warehouse transfer delivery125 = Location Transfer Delivery130 = Goods receipt131 = Purchase return132 = Stock in (Drop shipment)133 = Stock out (Drop shipment return)134 = Warehouse transfer receipt135 = Location Transfer Receipt140 = Shop order stock receipt141 = Shop order stock reversal147 = Shop order by-product receipt148 = Shop order by-product reversal150 = Requirement issue151 = Requirement reversal155 = Subcontract issue156 = Subcontract return160 = Receipt (Assembly)161 = Return receipt (Disassembly)165 = Issue (Assembly)166 = Return issue (Disassembly)180 = Stock revaluation181 = Financial revaluation195 = Stock count196 = Adjust stock - out197 = Adjust stock - in
 * @property string $StorageLocation Storage location which this serial number is entering or leaving
 * @property string $StorageLocationCode Code of the storage location which this serial number is entering or leaving
 * @property string $StorageLocationDescription Description of the storage location which this serial number is entering or leaving
 * @property string $Warehouse Warehouse which this serial number is entering or leaving
 * @property string $WarehouseCode Code of the warehouse which this serial number is entering or leaving
 * @property string $WarehouseDescription Description of the warehouse which this serial number is entering or leaving
 */
class StockSerialNumber extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
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
        'Remarks',
        'SerialNumber',
        'SerialNumberID',
        'StartDate',
        'StockCountLine',
        'StockTransactionID',
        'StockTransactionType',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/StockSerialNumbers';
}

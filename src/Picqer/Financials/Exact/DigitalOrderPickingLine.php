<?php

namespace Picqer\Financials\Exact;

/**
 * Class DigitalOrderPickingLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderDigitalOrderPickingLines
 *
 * @property string $ID Primary key
 * @property StockBatchNumber[] $BatchNumbers The collection of batch numbers that belong to the items included in this pick order
 * @property string $Bin Bin value for particular order
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $EntryID The EntryID identifies the digital order picking. All the lines of a digital order picking have the same EntryID
 * @property int $IsAssembledItem Indicates that an Item is an assembled item
 * @property int $IsBatchNumberItem Indicates that an Item is an batch item
 * @property int $IsSerialNumberItem Indicates that an Item is an serial item
 * @property string $Item Item ID
 * @property string $ItemBarcode Barcode of the item (numeric string)
 * @property string $ItemBarcodeAdditional This is the barcode for the unit other than standard unit of the item. Only supported by the Premium for Wholesale & Distribution and Manufacturing
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property string $ItemUnitcode Item unit code from sales order
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra notes
 * @property string $OrderPicker User ID of order picker
 * @property string $OrderPickerFullName Name of the order picker
 * @property string $PickedDate Date of order picked
 * @property string $PickedOrderDeliveryDate Date of goods delivery
 * @property int $PickOrderNumber Pick order number
 * @property float $QuantityPicked Quantity picked
 * @property float $QuantityToBePicked Quantity to be picked
 * @property string $RelatedID Related digital order picking line ID, for example assembled item picking line ID
 * @property string $SalesOrderLineID Sales order line ID
 * @property int $SalesOrderNumber Sales order Number
 * @property StockSerialNumber[] $SerialNumbers The collection of serial numbers that belong to the items included in this pick order
 * @property int $Status Picking status: 12-Open, 20-Partial, 21-Completed, 22-Picked, 40-Delivered, 45-Cancelled
 * @property string $StorageLocation Storage location ID
 * @property string $StorageLocationCode Item default storage location code
 * @property string $StorageLocationDescription Description of item default storage location
 * @property float $UnitFactor This is the multiplication factor when going from default item unit to the unit of sales order
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Warehouse code
 * @property string $WarehouseDescription Description of warehouse
 */
class DigitalOrderPickingLine extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'Bin',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EntryID',
        'IsAssembledItem',
        'IsBatchNumberItem',
        'IsSerialNumberItem',
        'Item',
        'ItemBarcode',
        'ItemBarcodeAdditional',
        'ItemCode',
        'ItemDescription',
        'ItemUnitcode',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OrderPicker',
        'OrderPickerFullName',
        'PickedDate',
        'PickedOrderDeliveryDate',
        'PickOrderNumber',
        'QuantityPicked',
        'QuantityToBePicked',
        'RelatedID',
        'SalesOrderLineID',
        'SalesOrderNumber',
        'SerialNumbers',
        'Status',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'UnitFactor',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'salesorder/DigitalOrderPickingLines';
}

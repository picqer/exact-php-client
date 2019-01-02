<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsReceiptLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderGoodsReceiptLines
 *
 * @property string $ID Primary key
 * @property StockBatchNumbers $BatchNumbers Collection of batch numbers
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Goods receipt line description
 * @property int $Division Division code
 * @property string $GoodsReceiptID All the lines of a goods receipt have the same GoodsReceiptID
 * @property string $Item ID of the received item
 * @property string $ItemCode Code of the received item
 * @property string $ItemDescription Item description
 * @property string $ItemUnitCode Unit code of the purchase
 * @property int $LineNumber Line number
 * @property string $Location ID of the storage location in the warehouse where the item is received
 * @property string $LocationCode Code of the storage location in the warehouse where the item is received
 * @property string $LocationDescription Description of the storage location in the warehouse where the item is received
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes Notes
 * @property string $Project Reference to project
 * @property string $ProjectCode Project code
 * @property string $ProjectDescription Project description
 * @property string $PurchaseOrderID Reference to purchase order
 * @property string $PurchaseOrderLineID ID of the purchase order line that is received
 * @property int $PurchaseOrderNumber Order number of the purchase order that is received
 * @property float $QuantityOrdered Quantity ordered
 * @property float $QuantityReceived Quantity received
 * @property StockSerialNumbers $SerialNumbers Collection of serial numbers
 * @property string $SupplierItemCode Supplier item code
 */
class GoodsReceiptLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'GoodsReceiptID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemUnitCode',
        'LineNumber',
        'Location',
        'LocationCode',
        'LocationDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'PurchaseOrderID',
        'PurchaseOrderLineID',
        'PurchaseOrderNumber',
        'QuantityOrdered',
        'QuantityReceived',
        'SerialNumbers',
        'SupplierItemCode',
    ];

    protected $url = 'purchaseorder/GoodsReceiptLines';

}
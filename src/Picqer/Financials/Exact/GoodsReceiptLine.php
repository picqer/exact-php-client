<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsReceiptLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderGoodsReceiptLines
 *
 * @property Guid $ID Primary key
 * @property StockBatchNumbers $BatchNumbers Collection of batch numbers
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description Goods receipt line description
 * @property Int32 $Division Division code
 * @property Guid $GoodsReceiptID All the lines of a goods receipt have the same GoodsReceiptID
 * @property Guid $Item ID of the received item
 * @property String $ItemCode Code of the received item
 * @property String $ItemDescription Item description
 * @property String $ItemUnitCode Unit code of the purchase
 * @property Int32 $LineNumber Line number
 * @property Guid $Location ID of the storage location in the warehouse where the item is received
 * @property String $LocationCode Code of the storage location in the warehouse where the item is received
 * @property String $LocationDescription Description of the storage location in the warehouse where the item is received
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Notes Notes
 * @property Guid $Project Reference to project
 * @property String $ProjectCode Project code
 * @property String $ProjectDescription Project description
 * @property Guid $PurchaseOrderID Reference to purchase order
 * @property Guid $PurchaseOrderLineID ID of the purchase order line that is received
 * @property Int32 $PurchaseOrderNumber Order number of the purchase order that is received
 * @property Double $QuantityOrdered Quantity ordered
 * @property Double $QuantityReceived Quantity received
 * @property StockSerialNumbers $SerialNumbers Collection of serial numbers
 * @property String $SupplierItemCode Supplier item code
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
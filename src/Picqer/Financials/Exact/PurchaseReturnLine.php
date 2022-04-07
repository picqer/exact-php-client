<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseReturnLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseReturnLines
 *
 * @property string $ID Primary key
 * @property StockBatchNumber[] $BatchNumbers Collection of batch numbers
 * @property bool $CreateCredit Credit note
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $EntryID EntryID identifies the purchase return. All the lines of purchase return have the same Entry ID
 * @property string $GoodsReceiptLineID ID of the goods receipts line
 * @property string $Item The unique identifier of the item being returned
 * @property string $ItemCode Code of the returned item
 * @property string $ItemDescription Item Description
 * @property int $LineNumber LineNumber
 * @property string $Location ID of the storage location in the warehouse where the item is returned
 * @property string $LocationCode Code of the storage location in the warehouse where the item is returned
 * @property string $LocationDescription Description of the storage location in the warehouse where the item is returned
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes Notes related to the return
 * @property string $PurchaseOrderLineID ID of the purchase order line that is returned
 * @property int $PurchaseOrderNumber Order number of the purchase order that is returned
 * @property int $ReceiptNumber Receipt number of the return
 * @property float $ReceivedQuantity Quantity received
 * @property float $ReturnQuantity Quantity returned
 * @property string $ReturnReasonCodeDescription Description of ReasonCode
 * @property string $ReturnReasonCodeID Indicates the reason why the purchase was returned
 * @property StockSerialNumber[] $SerialNumbers Collection of serial numbers
 * @property string $SupplierItemCode Supplier item code
 * @property string $UnitCode Unit code of the purchase
 */
class PurchaseReturnLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'CreateCredit',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EntryID',
        'GoodsReceiptLineID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'Location',
        'LocationCode',
        'LocationDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PurchaseOrderLineID',
        'PurchaseOrderNumber',
        'ReceiptNumber',
        'ReceivedQuantity',
        'ReturnQuantity',
        'ReturnReasonCodeDescription',
        'ReturnReasonCodeID',
        'SerialNumbers',
        'SupplierItemCode',
        'UnitCode',
    ];

    protected $url = 'purchaseorder/PurchaseReturnLines';
}

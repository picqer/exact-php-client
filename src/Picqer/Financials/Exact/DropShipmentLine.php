<?php

namespace Picqer\Financials\Exact;

/**
 * Class DropShipmentLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderDropShipmentLines
 *
 * @property string $ID The unique identifier of a stock transaction for a dropshipment line.
 * @property StockBatchNumber[] $BatchNumbers Collection of batch numbers
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CustomerItemCode Code the customer uses for this item
 * @property string $DeliveryDate Date of goods delivery
 * @property string $Description Description of sales order dropshipment
 * @property int $Division Division code
 * @property string $EntryID The EntryID identifies the dropshipment. All the lines of a dropshipment have the same EntryID
 * @property string $Item Reference to item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property string $PurchaseOrderLineID Reference to purchase order
 * @property float $QuantityDelivered Quantity delivered
 * @property float $QuantityOrdered Quantity ordered
 * @property string $SalesOrderLineID Reference to sales order
 * @property int $SalesOrderLineNumber Sales order line number
 * @property int $SalesOrderNumber Sales order number
 * @property StockSerialNumber[] $SerialNumbers Collection of serial numbers
 * @property string $TrackingNumber Reference to tracking number
 * @property string $Unitcode Code of item unit
 */
class DropShipmentLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomerItemCode',
        'DeliveryDate',
        'Description',
        'Division',
        'EntryID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PurchaseOrderLineID',
        'QuantityDelivered',
        'QuantityOrdered',
        'SalesOrderLineID',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'SerialNumbers',
        'TrackingNumber',
        'Unitcode',
    ];

    protected $url = 'salesorder/DropShipmentLines';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsDeliveryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveryLines
 *
 * @property string $ID Primary key
 * @property StockBatchNumbers $BatchNumbers Collection of batch numbers
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DeliveryDate Date of goods delivery
 * @property string $Description Description of sales order delivery
 * @property int $Division Division code
 * @property string $EntryID The EntryID identifies the goods delivery. All the lines of a goods delivery have the same EntryID
 * @property string $Item Reference to item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property float $QuantityDelivered Quantity delivered
 * @property float $QuantityOrdered Quantity ordered
 * @property string $SalesOrderLineID Reference to sales order
 * @property int $SalesOrderLineNumber Sales order line number
 * @property int $SalesOrderNumber Sales order number
 * @property StockSerialNumbers $SerialNumbers Collection of serial numbers
 * @property string $StorageLocation Reference to storage location
 * @property string $StorageLocationCode Storage location code
 * @property string $StorageLocationDescription Storage location description
 * @property string $TrackingNumber Reference to tracking number
 * @property string $Unitcode Code of item unit
 */
class GoodsDeliveryLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'Created',
        'Creator',
        'CreatorFullName',
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
        'QuantityDelivered',
        'QuantityOrdered',
        'SalesOrderLineID',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'SerialNumbers',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'TrackingNumber',
        'Unitcode',
    ];

    protected $url = 'salesorder/GoodsDeliveryLines';

}
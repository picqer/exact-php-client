<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsDeliveryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveryLines
 *
 * @property Guid $ID Primary key
 * @property StockBatchNumbers $BatchNumbers Collection of batch numbers
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property DateTime $DeliveryDate Date of goods delivery
 * @property String $Description Description of sales order delivery
 * @property Int32 $Division Division code
 * @property Guid $EntryID The EntryID identifies the goods delivery. All the lines of a goods delivery have the same EntryID
 * @property Guid $Item Reference to item
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of item
 * @property Int32 $LineNumber Line number
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 * @property Double $QuantityDelivered Quantity delivered
 * @property Double $QuantityOrdered Quantity ordered
 * @property Guid $SalesOrderLineID Reference to sales order
 * @property Int32 $SalesOrderLineNumber Sales order line number
 * @property Int32 $SalesOrderNumber Sales order number
 * @property StockSerialNumbers $SerialNumbers Collection of serial numbers
 * @property Guid $StorageLocation Reference to storage location
 * @property String $StorageLocationCode Storage location code
 * @property String $StorageLocationDescription Storage location description
 * @property String $TrackingNumber Reference to tracking number
 * @property String $Unitcode Code of item unit
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
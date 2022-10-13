<?php

namespace Picqer\Financials\Exact;

/**
 * Class DigitalOrderPicking.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderDigitalOrderPickings
 *
 * @property string $EntryID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $DeliveryAccount Reference to account for delivery
 * @property string $DeliveryAccountCode Delivery account code
 * @property string $DeliveryAccountName Account name
 * @property int $DigitalOrderPickingLineCount Total row count of lines
 * @property DigitalOrderPickingLine[] $DigitalOrderPickingLines Collection of lines
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OrderPicker User ID of order picker
 * @property string $OrderPickerFullName Name of the order picker
 * @property string $PickedDate Date of order picked
 * @property string $PickedOrderDeliveryDate Date of goods delivery
 * @property int $PickOrderNumber Pick order number
 * @property string $Remarks Remarks
 * @property int $SalesOrderCount Sales order count
 * @property int $SalesOrderNumber Sales order Number
 * @property int $Status Picking status: 12-Open, 20-Partial, 21-Completed, 22-Picked, 23=InProcess, 40-Delivered
 * @property int $Type Picking type: 1-Order, 2-Batch
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Warehouse code
 * @property string $WarehouseDescription Description of warehouse
 */
class DigitalOrderPicking extends Model
{
    use Query\Findable;

    protected $primaryKey = 'EntryID';

    protected $fillable = [
        'EntryID',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountName',
        'DigitalOrderPickingLineCount',
        'DigitalOrderPickingLines',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderPicker',
        'OrderPickerFullName',
        'PickedDate',
        'PickedOrderDeliveryDate',
        'PickOrderNumber',
        'Remarks',
        'SalesOrderCount',
        'SalesOrderNumber',
        'Status',
        'Type',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'salesorder/DigitalOrderPickings';
}

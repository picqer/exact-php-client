<?php

namespace Picqer\Financials\Exact;

/**
 * Class PlannedSalesReturnLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderPlannedSalesReturnLines
 *
 * @property string $ID Primary key
 * @property stockbatchnumbers $BatchNumbers The collection of batch numbers that belong to the items included in this planned sales return
 * @property int $CreateCredit Option to redeliver to replace the goods or to create a credit note for the returned item: 0-Redelivery, 1-Credit Note
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $GoodDeliveryLineID Goods delivery line of the particular item
 * @property string $Item Item ID. This item must link to the provided warehouse for POST.
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property float $PlannedReturnQuantity Expected quantity to be returned
 * @property string $PlannedSalesReturnID Entry number of the planned sales return
 * @property float $ReceivedQuantity Actual quantity returned
 * @property string $SalesOrderLineID Sales order line of the particular item
 * @property int $SalesOrderNumber Saler order of the particular item
 * @property stockserialnumbers $SerialNumbers The collection of serial numbers that belong to the items included in this planned sales return
 * @property string $StockTransactionEntryID Entry number of the stock transaction
 * @property string $StorageLocation Storage location
 * @property string $StorageLocationCode Storage location code
 * @property string $StorageLocationDescription Storage location description
 * @property string $UnitCode Code of item's sales unit
 * @property string $UnitDescription Description of item's sales unit
 */
class PlannedSalesReturnLine extends Model
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
        'GoodDeliveryLineID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PlannedReturnQuantity',
        'PlannedSalesReturnID',
        'ReceivedQuantity',
        'SalesOrderLineID',
        'SalesOrderNumber',
        'SerialNumbers',
        'StockTransactionEntryID',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'UnitCode',
        'UnitDescription',
    ];

    protected $url = 'salesorder/PlannedSalesReturnLines';
}

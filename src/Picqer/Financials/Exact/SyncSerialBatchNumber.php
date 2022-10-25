<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSerialBatchNumber.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncInventorySerialBatchNumbers
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $EndDate End date of effective period for serial or batch number
 * @property string $ID A guid that is the unique identifier of the serial or batch number
 * @property int $IsBlocked Boolean value indicating whether or not the serial or batch number is blocked
 * @property string $Item Item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property string $SerialBatchNumber Human readable serial or batch number
 * @property string $StartDate Start date of effective period for serial number
 * @property int $Type Type of number (serial or batch) Available values:1 = Serial number2 = Batch number
 */
class SyncSerialBatchNumber extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EndDate',
        'ID',
        'IsBlocked',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Remarks',
        'SerialBatchNumber',
        'StartDate',
        'Type',
    ];

    protected $url = 'sync/Inventory/SerialBatchNumbers';
}

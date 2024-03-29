<?php

namespace Picqer\Financials\Exact;

/**
 * Class SerialNumber.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventorySerialNumbers
 *
 * @property string $ID A guid that is the unique identifier of the serial number
 * @property int $Available Availability of this serial number
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property int $Division Division code
 * @property string $EndDate End date of effective period for serial number
 * @property int $IsBlocked Boolean value indicating whether or not the serial number is blocked
 * @property string $Item Item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property string $SerialNumber Human readable serial number
 * @property string $StartDate Start date of effective period for serial number
 * @property string $StorageLocation ID of storage location where serial number is available
 * @property string $StorageLocationCode Code of storage location where serial number is available
 * @property string $StorageLocationDescription Description of storage location where serial number is available
 * @property string $Warehouse ID of warehouse where serial number is available
 * @property string $WarehouseCode Code of warehouse where serial number is available
 * @property string $WarehouseDescription Description of warehouse where serial number is available
 */
class SerialNumber extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Available',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'Division',
        'EndDate',
        'IsBlocked',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Remarks',
        'SerialNumber',
        'StartDate',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/SerialNumbers';
}

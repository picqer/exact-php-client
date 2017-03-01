<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SerialNumber
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventorySerialNumbers
 * 
 * @property Guid $ID Primary key
 * @property Byte $Available Availability of this serial number
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $EndDate End date of effective period for serial number
 * @property Byte $IsBlocked Boolean value indicating whether or not the serial number is blocked
 * @property Guid $Item Item
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Remarks Remarks
 * @property String $SerialNumber Human readable serial number
 * @property DateTime $StartDate Start date of effective period for serial number
 * @property Guid $StorageLocation ID of storage location where serial number is available
 * @property String $StorageLocationCode Code of storage location where serial number is available
 * @property String $StorageLocationDescription Description of storage location where serial number is available
 * @property Guid $Warehouse ID of warehouse where serial number is available
 * @property String $WarehouseCode Code of warehouse where serial number is available
 * @property String $WarehouseDescription Description of warehouse where serial number is available
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
        'WarehouseDescription'
    ];

    protected $url = 'inventory/SerialNumbers';

}

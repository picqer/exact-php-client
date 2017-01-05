<?php namespace Picqer\Financials\Exact;

/**
 * Class BatchNumber
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryBatchNumbers
 * 
 * @property Guid $ID Primary key
 * @property Double $AvailableQuantity Available quantity of this batch number
 * @property String $BatchNumber Human readable batch number
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $ExpiryDate Expiry date of effective period for batch number
 * @property Byte $IsBlocked Boolean value indicating whether or not the batch number is blocked
 * @property Guid $Item Item
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Remarks Remarks
 * @property StorageLocations $StorageLocations Total quantity available per location
 * @property Warehouses $Warehouses Total quantity available per warehouse
 */
class BatchNumber extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AvailableQuantity',
        'BatchNumber',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'ExpiryDate',
        'IsBlocked',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Remarks',
        'StorageLocations',
        'Warehouses'
    ];

    protected $url = 'inventory/BatchNumbers';

}

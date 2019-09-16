<?php

namespace Picqer\Financials\Exact;

/**
 * Class BatchNumber.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryBatchNumbers
 *
 * @property string $ID Primary key
 * @property float $AvailableQuantity Available quantity of this batch number
 * @property string $BatchNumber Human readable batch number
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $ExpiryDate Expiry date of effective period for batch number
 * @property int $IsBlocked Boolean value indicating whether or not the batch number is blocked
 * @property string $Item Item
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property storagelocations $StorageLocations Total quantity available per location
 * @property warehouses $Warehouses Total quantity available per warehouse
 */
class BatchNumber extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'Warehouses',
    ];

    protected $url = 'inventory/BatchNumbers';
}

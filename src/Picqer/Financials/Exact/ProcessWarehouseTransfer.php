<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProcessWarehouseTransfer.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryProcessWarehouseTransfer
 *
 * @property string $TransferID Primary key
 * @property int $Division Division code
 * @property string $TransferDate Transfer Date
 */
class ProcessWarehouseTransfer extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'TransferID';

    protected $fillable = [
        'TransferID',
        'Division',
        'TransferDate',
    ];

    protected $url = 'inventory/ProcessWarehouseTransfer';
}

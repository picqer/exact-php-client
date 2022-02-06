<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProcessWarehouseTransfer.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryProcessWarehouseTransfer
 *
 * @property string $TransferID A guid that is the unique identifier of the warehouse transfer
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

<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProcessStockCount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryProcessStockCount
 *
 * @property string $StockCountID Primary key
 * @property int $Division Division code
 * @property string $ErrorMessage Contains the error message if an error occurred during the processing of the stock count.
 * @property string $SuccessMessage Contains information if the stock count was successfully processed.
 */
class ProcessStockCount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'StockCountID';

    protected $fillable = [
        'StockCountID',
        'Division',
        'ErrorMessage',
        'SuccessMessage',
    ];

    protected $url = 'inventory/ProcessStockCount';
}

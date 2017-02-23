<?php namespace Picqer\Financials\Exact;

/**
 * Class ProcessStockCount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryProcessStockCount
 * 
 * @property Guid $StockCountID Primary key
 * @property Int32 $Division Division code
 * @property String $ErrorMessage Contains the error message if an error occurred during the processing of the stock count.
 * @property String $SuccessMessage Contains information if the stock count was successfully processed.
 */
class ProcessStockCount extends Model
{
    use Persistance\Storable;

    protected $fillable = [
        'StockCountID',
        'Division',
        'ErrorMessage',
        'SuccessMessage'
    ];

    protected $url = 'inventory/ProcessStockCount';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockPosition.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsStockPosition
 *
 * @property float $FreeStock Quantity of available stock
 * @property float $InStock Number of items in stock
 * @property string $ItemId Primary key, Item
 * @property float $PlanningIn Number of items that are planned to come in
 * @property float $PlanningOut Number of items that are planned to go out
 * @property float $ProjectedStock The quantity of stock projected given all planned future stock changes
 * @property float $ReservedStock Stock stored in the warehouse that is already reserved
 */
class StockPosition extends Model
{
    use Query\Findable;

    protected $fillable = [
        'FreeStock',
        'InStock',
        'ItemId',
        'PlanningIn',
        'PlanningOut',
        'ProjectedStock',
        'ReservedStock',
    ];

    protected $url = 'read/logistics/StockPosition';
}

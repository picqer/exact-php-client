<?php

namespace Picqer\Financials\Exact;

/**
 * Class StockPosition.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsStockPosition
 *
 * @property float $InStock Number of items in stock
 * @property string $ItemId Primary key, Item
 * @property float $PlanningIn Number of items that are planned to come in
 * @property float $PlanningOut Number of items that are planned to go out
 */
class StockPosition extends Model
{
    use Query\Findable;

    protected $fillable = [
        'InStock',
        'ItemId',
        'PlanningIn',
        'PlanningOut',
    ];

    protected $url = 'read/logistics/StockPosition';
}

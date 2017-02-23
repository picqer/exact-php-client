<?php namespace Picqer\Financials\Exact;

/**
 * Class StockPosition
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsStockPosition
 * 
 * @property Double $InStock Number of items in stock
 * @property Guid $ItemId Primary key, Item
 * @property Double $PlanningIn Number of items that are planned to come in
 * @property Double $PlanningOut Number of items that are planned to go out
 */
class StockPosition extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'itemId';

    protected $fillable = [
        'InStock',
        'ItemId',
        'PlanningIn',
        'PlanningOut'
    ];

    protected $url = 'read/logistics/StockPosition';

}

<?php
namespace Picqer\Financials\Exact;

/**
 * Entity holding stock position details.
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsStockPosition
 *
 * @property $InStock
 * @property $ItemId
 * @property $PlanningIn
 * @property $PlanningOut
 */
class StockPosition extends Model
{
    use Query\Findable;

    /**
     * The fillable properties for the StockPosition model.
     *
     * @var string[]
     */
    protected $fillable = ['InStock', 'ItemId', 'PlanningIn', 'PlanningOut'];

    /**
     * The API request URL slug.
     *
     * @var string
     */
    protected $url = 'read/logistics/StockPosition';

    /**
     * The primary key for the current entity.
     *
     * @var string
     */
    protected $primaryKey = 'ItemId';

    /**
     * Find a stock position with item id
     *
     * @param string $id For example: 00000000-0000-0000-0000-000000000000
     * @return StockPosition
     */
    public function find($id)
    {
        $result = $this->connection()->get($this->url, [
            'itemId' => sprintf('guid\'%s\'', $id)
        ]);

        return new self($this->connection(), $result);
    }
}

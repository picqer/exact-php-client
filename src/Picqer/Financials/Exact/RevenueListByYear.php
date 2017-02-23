<?php namespace Picqer\Financials\Exact;

/**
 * Class RevenueListByYear
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialRevenueListByYear
 * 
 * @property Int32 $Period Reporting period
 * @property Int32 $Year Reporting year
 * @property Double $Amount Total amount in the default currency of the company
 */
class RevenueListByYear extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'year';

    protected $fillable = [
        'Period',
        'Year',
        'Amount'
    ];

    protected $url = 'read/financial/RevenueListByYear';

}

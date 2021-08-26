<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProfitLossOverview.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialProfitLossOverview
 *
 * @property int $CurrentYear Primary key, Current year
 * @property float $CostsCurrentPeriod Total cost for the current year and period
 * @property float $CostsCurrentYear Total cost for the current year
 * @property float $CostsPreviousYear Total cost for the previous year
 * @property float $CostsPreviousYearPeriod Total cost for the previous year and period
 * @property string $CurrencyCode Currency code
 * @property int $CurrentPeriod Current period
 * @property int $PreviousYear Previous year
 * @property int $PreviousYearPeriod Period in previous year
 * @property float $ResultCurrentPeriod Results of current year and period
 * @property float $ResultCurrentYear Results of current year
 * @property float $ResultPreviousYear Results of previous year
 * @property float $ResultPreviousYearPeriod Results of previous year and period
 * @property float $RevenueCurrentPeriod Total revenue for the current year and period
 * @property float $RevenueCurrentYear Total revenue for the current year
 * @property float $RevenuePreviousYear Total revenue for the previous year
 * @property float $RevenuePreviousYearPeriod Total revenue for the previous year and period
 */
class ProfitLossOverview extends Model
{
    use Query\Findable;

    protected $primaryKey = 'CurrentYear';

    protected $fillable = [
        'CurrentYear',
        'CostsCurrentPeriod',
        'CostsCurrentYear',
        'CostsPreviousYear',
        'CostsPreviousYearPeriod',
        'CurrencyCode',
        'CurrentPeriod',
        'PreviousYear',
        'PreviousYearPeriod',
        'ResultCurrentPeriod',
        'ResultCurrentYear',
        'ResultPreviousYear',
        'ResultPreviousYearPeriod',
        'RevenueCurrentPeriod',
        'RevenueCurrentYear',
        'RevenuePreviousYear',
        'RevenuePreviousYearPeriod',
    ];

    protected $url = 'read/financial/ProfitLossOverview';
}

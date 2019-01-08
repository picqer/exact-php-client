<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProfitLossOverview
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialProfitLossOverview
 *
 * @property int $CurrentYear Current year, Primary key
 * @property float $CostsCurrentPeriod Costs in current period
 * @property float $CostsCurrentYear Costs in current year
 * @property float $CostsPreviousYear Costs in previous year
 * @property float $CostsPreviousYearPeriod Costs in period of previous year
 * @property string $CurrencyCode Currency Code
 * @property int $CurrentPeriod Current period
 * @property int $PreviousYear Previous year
 * @property int $PreviousYearPeriod Period in previous year
 * @property float $ResultCurrentPeriod Results of current period
 * @property float $ResultCurrentYear
 * @property float $ResultPreviousYear
 * @property float $ResultPreviousYearPeriod Results of period in previous year
 * @property float $RevenueCurrentPeriod Revenue in current period
 * @property float $RevenueCurrentYear Revenue in current year
 * @property float $RevenuePreviousYear Revenue in previous year
 * @property float $RevenuePreviousYearPeriod Revenue in period of previous year
 */
class ProfitLossOverview extends Model
{
    use Query\Findable;

    protected $primaryKey = 'CurrentYear';

    protected $fillable = [
        'CostsCurrentPeriod',
        'CostsCurrentYear',
        'CostsPreviousYear',
        'CostsPreviousYearPeriod',
        'CurrencyCode',
        'CurrentYear',
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
        'RevenuePreviousPeriod',
    ];

    protected $url = 'read/financial/ProfitLossOverview';
}

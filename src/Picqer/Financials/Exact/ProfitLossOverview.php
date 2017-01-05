<?php namespace Picqer\Financials\Exact;

/**
 * Class ProfitLossOverview
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialProfitLossOverview
 * 
 * @property Int32 $CurrentYear Primary key, Current year
 * @property Double $CostsCurrentPeriod Costs in current period
 * @property Double $CostsCurrentYear Costs in current year
 * @property Double $CostsPreviousYear Costs in previous year
 * @property Double $CostsPreviousYearPeriod Costs in period of previous year
 * @property String $CurrencyCode Currency code
 * @property Int32 $CurrentPeriod Current period
 * @property Int32 $PreviousYear Previous year
 * @property Int32 $PreviousYearPeriod Period in previous year
 * @property Double $ResultCurrentPeriod Results of current period
 * @property Double $ResultCurrentYear 
 * @property Double $ResultPreviousYear 
 * @property Double $ResultPreviousYearPeriod Results of period in previous year
 * @property Double $RevenueCurrentPeriod Revenue in current period
 * @property Double $RevenueCurrentYear Revenue in current year
 * @property Double $RevenuePreviousYear Revenue in previous year
 * @property Double $RevenuePreviousYearPeriod Revenue in period of previous year
 */
class ProfitLossOverview extends Model
{
    use Query\Findable;

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
        'RevenuePreviousYearPeriod'
    ];

    protected $url = 'read/financial/ProfitLossOverview';

}

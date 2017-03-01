<?php 

namespace Picqer\Financials\Exact;

/**
 * Class RevenueList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialRevenueList
 * 
 * @property Int32 $Period Reporting period
 * @property Int32 $Year Reporting year
 * @property Double $Amount Total amount in the default currency of the company
 */
class RevenueList extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Year';

    protected $fillable = [
        'Period',
        'Year',
        'Amount'
    ];

    protected $url = 'read/financial/RevenueList';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class RevenueList.
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialRevenueList
 *
 * @property int $Year Year
 * @property int $Period Period
 * @property float $Amount amount of revenue
 */

class RevenueList extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Year';

    protected $fillable = [
        'Year',
        'Period',
        'Amount',
    ];

    protected $url = 'read/financial/RevenueList';
}

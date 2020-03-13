<?php

namespace Picqer\Financials\Exact;

/**
 * Class RevenueListByYearAndStatus.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialRevenueListByYearAndStatus
 *
 * @property int $Period Reporting period
 * @property int $Year Current Reporting year
 * @property float $Amount Total amount in the default currency of the company
 */
class RevenueListByYearAndStatus extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Year';

    protected $fillable = [
        'Period',
        'Year',
        'Amount',
    ];

    protected $url = 'read/financial/RevenueListByYearAndStatus?year={Edm.Int32}&afterEntry={Edm.Boolean}';
}

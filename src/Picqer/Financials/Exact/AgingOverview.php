<?php

namespace Picqer\Financials\Exact;

/**
 * Class AgingOverview.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingOverview
 *
 * @property int $AgeGroup Primary key
 * @property string $AgeGroupDescription Description of AgeGroup
 * @property float $AmountPayable Amount payable
 * @property float $AmountReceivable Amount receivable
 * @property string $CurrencyCode Code of Currency
 */
class AgingOverview extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AgeGroup';

    protected $fillable = [
        'AgeGroup',
        'AgeGroupDescription',
        'AmountPayable',
        'AmountReceivable',
        'CurrencyCode',
    ];

    protected $url = 'read/financial/AgingOverview';
}

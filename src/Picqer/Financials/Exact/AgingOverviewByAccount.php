<?php

namespace Picqer\Financials\Exact;

/**
 * Class AgingOverviewByAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingOverviewByAccount
 *
 * @property int $AgeGroup Primary key
 * @property string $AgeGroupDescription Description of AgeGroup
 * @property float $AmountPayable Amount payable
 * @property float $AmountReceivable Amount receivable
 * @property string $CurrencyCode Code of Currency
 */
class AgingOverviewByAccount extends Model
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

    protected $url = 'read/financial/AgingOverviewByAccount?accountId={Edm.Guid}';
}

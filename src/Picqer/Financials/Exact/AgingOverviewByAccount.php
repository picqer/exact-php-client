<?php namespace Picqer\Financials\Exact;

/**
 * Class AgingOverviewByAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingOverviewByAccount
 * 
 * @property Int32 $AgeGroup Primary key
 * @property String $AgeGroupDescription Description of AgeGroup
 * @property Double $AmountPayable Amount payable
 * @property Double $AmountReceivable Amount receivable
 * @property String $CurrencyCode Code of Currency
 */
class AgingOverviewByAccount extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'accountId';

    protected $fillable = [
        'AgeGroup',
        'AgeGroupDescription',
        'AmountPayable',
        'AmountReceivable',
        'CurrencyCode'
    ];

    protected $url = 'read/financial/AgingOverviewByAccount';

}

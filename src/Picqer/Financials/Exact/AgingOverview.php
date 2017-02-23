<?php namespace Picqer\Financials\Exact;

/**
 * Class AgingOverview
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingOverview
 * 
 * @property Int32 $AgeGroup Primary key
 * @property String $AgeGroupDescription Description of AgeGroup
 * @property Double $AmountPayable Amount payable
 * @property Double $AmountReceivable Amount receivable
 * @property String $CurrencyCode Code of Currency
 */
class AgingOverview extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'AgeGroup';

    protected $fillable = [
        'AgeGroup',
        'AgeGroupDescription',
        'AmountPayable',
        'AmountReceivable',
        'CurrencyCode'
    ];

    protected $url = 'read/financial/AgingOverview';

}

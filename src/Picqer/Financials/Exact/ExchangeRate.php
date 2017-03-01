<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ExchangeRate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialExchangeRates
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $Rate The exchange rate is stored as 1 TARGET CURRENCY = x SOURCE CURRENCY
 * @property String $SourceCurrency The foreign currency
 * @property String $SourceCurrencyDescription Description of SourceCurrency
 * @property DateTime $StartDate The date as of which the rate is valid. The rate is valid until a next rate is defined
 * @property String $TargetCurrency The default currency of the division
 * @property String $TargetCurrencyDescription Description of TargetCurrency
 */
class ExchangeRate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Rate',
        'SourceCurrency',
        'SourceCurrencyDescription',
        'StartDate',
        'TargetCurrency',
        'TargetCurrencyDescription'
    ];

    protected $url = 'financial/ExchangeRates';

}

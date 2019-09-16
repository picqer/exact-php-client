<?php

namespace Picqer\Financials\Exact;

/**
 * Class ExchangeRate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialExchangeRates
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $Rate The exchange rate is stored as 1 TARGET CURRENCY = x SOURCE CURRENCY
 * @property string $SourceCurrency The foreign currency
 * @property string $SourceCurrencyDescription Description of SourceCurrency
 * @property string $StartDate The date as of which the rate is valid. The rate is valid until a next rate is defined
 * @property string $TargetCurrency The default currency of the division
 * @property string $TargetCurrencyDescription Description of TargetCurrency
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
        'TargetCurrencyDescription',
    ];

    protected $url = 'financial/ExchangeRates';
}

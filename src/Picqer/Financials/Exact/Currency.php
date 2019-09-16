<?php

namespace Picqer\Financials\Exact;

/**
 * Class Currency.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralCurrencies
 *
 * @property string $Code Primary key
 * @property float $AmountPrecision Amount precision
 * @property string $Created Creation date
 * @property string $Description Description of the currency
 * @property string $Modified Last modified date
 * @property float $PricePrecision Price precision
 */
class Currency extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'AmountPrecision',
        'Created',
        'Description',
        'Modified',
        'PricePrecision',
    ];

    protected $url = 'general/Currencies';
}

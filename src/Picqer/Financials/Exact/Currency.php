<?php

namespace Picqer\Financials\Exact;

/**
 * Class Currency.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralCurrencies
 *
 * @property string $Code Primary key
 * @property float $AmountPrecision Defines the number of decimals of the exchange rate used to calculate the amount in domestic currency from the amount in foreign currency
 * @property string $Created Creation date
 * @property string $Description Description of the currency
 * @property string $Modified Last modified date
 * @property float $PricePrecision Defines the number of decimals used to calculate the item price in created invoices
 */
class Currency extends Model
{
    use Query\Findable;

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

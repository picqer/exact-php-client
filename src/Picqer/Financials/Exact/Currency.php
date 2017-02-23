<?php namespace Picqer\Financials\Exact;

/**
 * Class Currency
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralCurrencies
 * 
 * @property String $Code Primary key
 * @property Double $AmountPrecision Amount precision
 * @property DateTime $Created Creation date
 * @property String $Description Description of the currency
 * @property DateTime $Modified Last modified date
 * @property Double $PricePrecision Price precision
 */
class Currency extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'AmountPrecision',
        'Created',
        'Description',
        'Modified',
        'PricePrecision'
    ];

    protected $url = 'general/Currencies';

}

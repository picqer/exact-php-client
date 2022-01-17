<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesPriceListPeriod.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesSalesPriceListPeriods
 *
 * @property string $ID Primary key. Price list period ID
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency All prices in the price list are stored in this currency
 * @property int $Division Division code
 * @property string $EndDate Date when the price list should become inactive
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PriceList Price list ID
 * @property string $StartDate Date for the price list start activate
 * @property int $Type Indicate the type of price list : 1-Basic, 2-Special offer
 */
class SalesPriceListPeriod extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Division',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PriceList',
        'StartDate',
        'Type',
    ];

    protected $url = 'sales/SalesPriceListPeriods';
}

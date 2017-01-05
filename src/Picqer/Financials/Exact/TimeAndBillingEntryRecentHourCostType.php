<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentHourCostType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentHourCostTypes
 * 
 * @property Guid $ItemId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ItemDescription Description of item
 */
class TimeAndBillingEntryRecentHourCostType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription'
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentHourCostTypes';

}

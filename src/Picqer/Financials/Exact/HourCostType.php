<?php namespace Picqer\Financials\Exact;

/**
 * Class HourCostType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourCostTypes
 * 
 * @property Guid $ItemId Primary key
 * @property String $ItemDescription Description of Item
 */
class HourCostType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ItemId',
        'ItemDescription'
    ];

    protected $url = 'read/project/HourCostTypes';

}

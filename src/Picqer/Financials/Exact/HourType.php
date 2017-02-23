<?php namespace Picqer\Financials\Exact;

/**
 * Class HourType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourTypes
 * 
 * @property Guid $ItemId Primary key
 * @property String $ItemDescription Description of Item
 */
class HourType extends Model
{
    use Query\Findable;
    use Query\Relatable;

    protected $fillable = [
        'ItemId',
        'ItemDescription'
    ];

    protected $url = 'read/project/HourTypes';

}

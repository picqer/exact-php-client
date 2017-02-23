<?php namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentHourType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentHourTypes
 * 
 * @property Guid $ItemId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ItemDescription Description of item
 */
class HourEntryRecentHourType extends Model
{
    use Query\Findable;
    use Query\Relatable;

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription'
    ];

    protected $url = 'read/project/HourEntryRecentHourTypes';

}

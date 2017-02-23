<?php namespace Picqer\Financials\Exact;

/**
 * Class HourTypesByDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourTypesByDate
 * 
 * @property Guid $ItemId Primary key
 * @property String $ItemDescription Description of Item
 */
class HourTypesByDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'ItemId';

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'checkDate';

    protected $fillable = [
        'ItemId',
        'ItemDescription'
    ];

    protected $url = 'read/project/HourTypesByDate';

}

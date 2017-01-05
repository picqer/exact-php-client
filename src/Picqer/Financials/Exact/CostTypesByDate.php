<?php namespace Picqer\Financials\Exact;

/**
 * Class CostTypesByDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypesByDate
 * 
 * @property Guid $ItemId Primary key
 * @property String $ItemDescription Description of Item
 */
class CostTypesByDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'checkDate';

    protected $fillable = [
        'ItemId',
        'ItemDescription'
    ];

    protected $url = 'read/project/CostTypesByDate';

}

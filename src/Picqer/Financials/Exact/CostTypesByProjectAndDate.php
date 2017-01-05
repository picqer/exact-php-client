<?php namespace Picqer\Financials\Exact;

/**
 * Class CostTypesByProjectAndDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypesByProjectAndDate
 * 
 * @property Guid $ItemId Primary key
 * @property String $ItemDescription Description of Item
 */
class CostTypesByProjectAndDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'ItemId',
        'ItemDescription'
    ];

    protected $url = 'read/project/CostTypesByProjectAndDate';

}

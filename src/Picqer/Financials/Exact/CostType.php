<?php namespace Picqer\Financials\Exact;

/**
 * Class CostType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypes
 * 
 * @property Guid $ItemId Primary key
 * @property String $ItemDescription Description of Item
 */
class CostType extends Model
{
    use Query\Findable;
    use Query\Relatable;

    protected $fillable = [
        'ItemId',
        'ItemDescription'
    ];

    protected $url = 'read/project/CostTypes';

}

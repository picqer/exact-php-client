<?php namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentCostType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentCostTypes
 * 
 * @property Guid $ItemId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ItemDescription Description of item
 */
class CostEntryRecentCostType extends Model
{
    use Query\Findable;
    use Query\Relatable;

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription'
    ];

    protected $url = 'read/project/CostEntryRecentCostTypes';

}

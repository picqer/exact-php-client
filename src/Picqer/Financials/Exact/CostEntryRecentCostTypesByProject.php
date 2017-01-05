<?php namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentCostTypesByProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentCostTypesByProject
 * 
 * @property Guid $ItemId Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $ItemDescription Description of item
 */
class CostEntryRecentCostTypesByProject extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription'
    ];

    protected $url = 'read/project/CostEntryRecentCostTypesByProject';

}

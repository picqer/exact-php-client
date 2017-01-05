<?php namespace Picqer\Financials\Exact;

/**
 * Class CostEntryExpensesByProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryExpensesByProject
 * 
 * @property Guid $ID Primary key
 * @property String $Description Description
 * @property String $ParentDescription Description of Parent
 */
class CostEntryExpensesByProject extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription'
    ];

    protected $url = 'read/project/CostEntryExpensesByProject';

}

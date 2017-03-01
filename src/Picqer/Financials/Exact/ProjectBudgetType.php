<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProjectBudgetType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectBudgetTypes
 * 
 * @property Int16 $ID Primary key
 * @property String $Description Description
 */
class ProjectBudgetType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description'
    ];

    protected $url = 'project/ProjectBudgetTypes';

}

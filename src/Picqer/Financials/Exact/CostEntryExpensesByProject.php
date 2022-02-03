<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryExpensesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryExpensesByProject
 *
 * @property string $ID ID of activity or expense
 * @property string $Description Description of activity or expense
 * @property string $ParentDescription Description of its parent
 */
class CostEntryExpensesByProject extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/CostEntryExpensesByProject';
}

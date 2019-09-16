<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryExpensesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryExpensesByProject
 *
 * @property string $ID Primary key
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class CostEntryExpensesByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/CostEntryExpensesByProject?projectId={Edm.Guid}';
}

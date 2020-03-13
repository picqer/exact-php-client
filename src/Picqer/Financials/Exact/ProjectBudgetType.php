<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectBudgetType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectBudgetTypes
 *
 * @property int $ID Primary key
 * @property string $Description Description
 */
class ProjectBudgetType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
    ];

    protected $url = 'project/ProjectBudgetTypes';
}

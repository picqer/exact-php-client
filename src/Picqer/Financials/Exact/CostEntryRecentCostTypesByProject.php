<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentCostTypesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentCostTypesByProject
 *
 * @property string $ItemId Primary key
 * @property string $DateLastUsed Date last used
 * @property string $ItemDescription Description of item
 */
class CostEntryRecentCostTypesByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostEntryRecentCostTypesByProject?projectId={Edm.Guid}';
}

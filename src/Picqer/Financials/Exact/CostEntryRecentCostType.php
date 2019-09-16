<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentCostType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentCostTypes
 *
 * @property string $ItemId Primary key
 * @property string $DateLastUsed Date last used
 * @property string $ItemDescription Description of item
 */
class CostEntryRecentCostType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostEntryRecentCostTypes';
}

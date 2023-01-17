<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentCostTypesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentCostTypesByProject
 *
 * @property string $ItemId Guid ID of the item used for hour entries
 * @property string $DateLastUsed The last date that the item has been used for hour entry
 * @property bool $IsValid Optional property indicating if the type is still valid for new entries. Can be used to show valid defaults
 * @property string $ItemCode Code of the item
 * @property string $ItemDescription Description of item
 */
class CostEntryRecentCostTypesByProject extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'IsValid',
        'ItemCode',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostEntryRecentCostTypesByProject';
}

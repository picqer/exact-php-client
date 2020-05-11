<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentHourTypesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentHourTypesByProject
 *
 * @property string $ItemId Primary key
 * @property string $DateLastUsed Date last used
 * @property string $ItemDescription Description of item
 */
class HourEntryRecentHourTypesByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourEntryRecentHourTypesByProject?projectId={Edm.Guid}';
}

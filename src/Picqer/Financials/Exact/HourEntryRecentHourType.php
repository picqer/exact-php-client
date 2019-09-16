<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentHourType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentHourTypes
 *
 * @property string $ItemId Primary key
 * @property string $DateLastUsed Date last used
 * @property string $ItemDescription Description of item
 */
class HourEntryRecentHourType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourEntryRecentHourTypes';
}

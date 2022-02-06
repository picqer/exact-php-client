<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourTypesByProjectAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourTypesByProjectAndDate
 *
 * @property string $ItemId GUID id of the item that is linked to the project
 * @property string $ItemDescription Description of the item that is linked to the project
 */
class HourTypesByProjectAndDate extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourTypesByProjectAndDate';
}

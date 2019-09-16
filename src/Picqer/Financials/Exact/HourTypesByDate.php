<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourTypesByDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourTypesByDate
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class HourTypesByDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourTypesByDate?checkDate={Edm.DateTime}';
}

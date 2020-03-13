<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourTypes
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class HourType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourTypes';
}

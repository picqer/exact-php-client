<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourCostType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourCostTypes
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class HourCostType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourCostTypes';
}

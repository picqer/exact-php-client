<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemAssortment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemAssortment
 *
 * @property string $ID ID of ItemAssortment
 * @property int $Code Code of ItemAssortment
 * @property string $Description Description of ItemAssortment
 * @property int $Division Division
 * @property properties $Properties Properties of this ItemAssortment
 */
class ItemAssortment extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'Division',
        'Properties',
    ];

    protected $url = 'logistics/ItemAssortment';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemAssortment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemAssortment
 *
 * @property string $ID Primary key
 * @property string $Code Code of the item assortment
 * @property string $Description Description of the item assortment
 * @property int $Division Division code
 * @property string $Properties Properties
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

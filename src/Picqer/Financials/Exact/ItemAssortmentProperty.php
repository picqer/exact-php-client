<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemAssortmentProperty.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemAssortmentProperty
 *
 * @property string $ID ID of Property
 * @property string $Code Code of Property
 * @property string $Description Description of Property
 * @property int $Division Division
 * @property int $ItemAssortmentCode Code of ItemAssortment
 */
class ItemAssortmentProperty extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'Division',
        'ItemAssortmentCode',
    ];

    protected $url = 'logistics/ItemAssortmentProperty';
}

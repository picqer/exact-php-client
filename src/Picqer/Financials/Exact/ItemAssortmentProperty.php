<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemAssortmentProperty.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemAssortmentProperty
 *
 * @property string $ID Primary key
 * @property string $Code Code of the item assortment property
 * @property string $Description Description of the item assortment property
 * @property int $Division Division code
 * @property string $ItemAssortmentCode ItemAssortmentCode
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

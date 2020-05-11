<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemExtraField.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsItemExtraField
 *
 * @property string $Description Description of the free field
 * @property string $ItemID Item Identidy
 * @property string $Modified Item last modified date
 * @property int $Number Used to determine the unique free field name as FreeField{Number}, first of all this is used for the external communication
 * @property string $Value The value store in free field
 */
class ItemExtraField extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Description',
        'ItemID',
        'Modified',
        'Number',
        'Value',
    ];

    protected $url = 'read/logistics/ItemExtraField';
}

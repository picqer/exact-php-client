<?php

namespace Picqer\Financials\Exact;

/**
 * Class AvailableFeature.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemAvailableFeatures
 *
 * @property int $ID The ID of the feature.
 * @property string $Description The description of the feature.
 */
class AvailableFeature extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
    ];

    protected $url = 'system/AvailableFeatures';
}

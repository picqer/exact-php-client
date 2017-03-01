<?php 

namespace Picqer\Financials\Exact;

/**
 * Class AvailableFeature
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemAvailableFeatures
 * 
 * @property Int32 $ID The ID of the feature.
 * @property String $Description The description of the feature.
 */
class AvailableFeature extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description'
    ];

    protected $url = 'system/AvailableFeatures';

}

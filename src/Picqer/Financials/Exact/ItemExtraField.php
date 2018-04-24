<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemExtraField
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItemExtraField
 *
 * @property String $Description Description of item
 * @property ItemID $ItemID Primary key
 * @property DateTime $Modified Last modified date
 * @property Double $Number Number of Field Order
 * @property String $Value Value of the selected List
 *
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
        'Value'
    ];

    protected $url = 'read/logistics/ItemExtraField';
}
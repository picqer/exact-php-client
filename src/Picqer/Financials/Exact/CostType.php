<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypes
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class CostType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostTypes';
}

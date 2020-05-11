<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostTypesByDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypesByDate
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class CostTypesByDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostTypesByDate?checkDate={Edm.DateTime}';
}

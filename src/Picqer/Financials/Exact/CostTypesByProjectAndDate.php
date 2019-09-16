<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostTypesByProjectAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypesByProjectAndDate
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class CostTypesByProjectAndDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostTypesByProjectAndDate?projectId={Edm.Guid}&checkDate={Edm.DateTime}';
}

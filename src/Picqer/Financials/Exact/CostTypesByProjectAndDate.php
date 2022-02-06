<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostTypesByProjectAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostTypesByProjectAndDate
 *
 * @property string $ItemId GUID id of the item that is linked to the project
 * @property string $ItemDescription Description of the item that is linked to the project
 */
class CostTypesByProjectAndDate extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostTypesByProjectAndDate';
}

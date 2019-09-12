<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourTypesByProjectAndDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourTypesByProjectAndDate
 *
 * @property string $ItemId Primary key
 * @property string $ItemDescription Description of Item
 */
class HourTypesByProjectAndDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'ItemDescription',
    ];

    protected $url = 'read/project/HourTypesByProjectAndDate?projectId={Edm.Guid}&checkDate={Edm.DateTime}';
}

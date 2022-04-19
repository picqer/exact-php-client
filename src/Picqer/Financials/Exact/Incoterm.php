<?php

namespace Picqer\Financials\Exact;

/**
 * Class Incoterm.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsIncoterms
 *
 * @property int $ID ID of Property
 * @property string $Code Code of Incoterm
 * @property string $Description Description of Incoterm
 * @property int $Version Version of Incoterm
 */
class Incoterm extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'Version',
    ];

    protected $url = 'logistics/Incoterms';
}

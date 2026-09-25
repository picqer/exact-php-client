<?php

namespace Picqer\Financials\Exact;

/**
 * Class ClientGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyClientGroups
 *
 * @property string $ID ID of the client group
 * @property string $ClientMainGroupID ID of the client main group
 * @property string $Code Code of the client group
 * @property string $Description Description of the client group
 */
class ClientGroup extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'ClientMainGroupID',
        'Code',
        'Description',
    ];

    protected $url = 'accountancy/ClientGroups';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class ClientMainGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyClientMainGroups
 *
 * @property string $ID ID of the client main group
 * @property string $Code Code of the client main group
 * @property string $Description Description of the client main group
 */
class ClientMainGroup extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
    ];

    protected $url = 'accountancy/ClientMainGroups';
}

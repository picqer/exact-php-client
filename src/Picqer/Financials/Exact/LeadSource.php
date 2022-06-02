<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeadSource.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMLeadSources
 *
 * @property string $ID
 * @property string $Code Code
 * @property string $Description Description
 */
class LeadSource extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
    ];

    protected $url = 'crm/LeadSources';
}

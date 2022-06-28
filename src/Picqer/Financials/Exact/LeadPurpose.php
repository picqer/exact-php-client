<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeadPurpose.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMLeadPurposes
 *
 * @property string $ID
 * @property string $Code Code
 * @property string $Description Description
 */
class LeadPurpose extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
    ];

    protected $url = 'crm/LeadPurposes';
}

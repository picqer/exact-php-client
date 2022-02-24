<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReasonForLogisticsLinkType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsReasonForLogisticsLinkTypes
 *
 * @property string $ID Primary key
 * @property string $Reason The reason linked to the type
 * @property int $Type Type of the reason code.
 * @property string $TypeDescription Description of the type of the reason code.
 */
class ReasonForLogisticsLinkType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Reason',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'logistics/ReasonForLogisticsLinkTypes';
}

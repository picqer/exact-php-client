<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReasonCodesLinkType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsReasonCodesLinkTypes
 *
 * @property string $ID Primary key
 * @property string $Reason The reason linked to the type
 * @property int $Type Type of the reason code.
 * @property string $TypeDescription Description of the type of the reason code.
 */
class ReasonCodesLinkType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Reason',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'logistics/ReasonCodesLinkTypes';
}

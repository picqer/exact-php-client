<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLTransactionType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLTransactionTypes
 *
 * @property int $ID
 * @property string $Description See https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Reference-restapi-transactiontypesr for more explanation
 * @property string $DescriptionSuffix See https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Reference-restapi-transactiontypesr for more explanation
 */
class GLTransactionType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'DescriptionSuffix',
    ];

    protected $url = 'financial/GLTransactionTypes';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLTransactionSource.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLTransactionSources
 *
 * @property int $ID
 * @property string $Description See https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Reference-restapi-transactionsourcesr for more explanation
 * @property string $DescriptionSuffix See https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Reference-restapi-transactionsourcesr for more explanation
 */
class GLTransactionSource extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'DescriptionSuffix',
    ];

    protected $url = 'financial/GLTransactionSources';
}

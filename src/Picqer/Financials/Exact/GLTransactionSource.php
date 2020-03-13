<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLTransactionSource.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLTransactionSources
 *
 * @property int $ID
 * @property string $Description
 * @property string $DescriptionSuffix
 */
class GLTransactionSource extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'DescriptionSuffix',
    ];

    protected $url = 'financial/GLTransactionSources';
}

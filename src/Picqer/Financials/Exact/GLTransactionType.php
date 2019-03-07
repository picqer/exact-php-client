<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLTransactionType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLTransactionTypes
 *
 * @property int $ID
 * @property string $Description
 * @property string $DescriptionSuffix
 */
class GLTransactionType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'DescriptionSuffix',
    ];

    protected $url = 'financial/GLTransactionTypes';
}

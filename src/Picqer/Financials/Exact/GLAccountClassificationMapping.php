<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLAccountClassificationMapping.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLAccountClassificationMappings
 *
 * @property string $ID Primary key
 * @property string $Classification ID of the classification
 * @property string $ClassificationCode Code of the classification
 * @property string $ClassificationDescription Description of the classification
 * @property int $Division Division of the classification mapping
 * @property string $GLAccount ID of the general ledger account
 * @property string $GLAccountCode Code of the general ledger account
 * @property string $GLAccountDescription Description of the general ledger account
 * @property string $GLSchemeCode Code of the general ledger scheme
 * @property string $GLSchemeDescription Description of the general ledger scheme
 * @property string $GLSchemeID General ledger scheme ID of the element
 */
class GLAccountClassificationMapping extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Classification',
        'ClassificationCode',
        'ClassificationDescription',
        'Division',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'GLSchemeCode',
        'GLSchemeDescription',
        'GLSchemeID',
    ];

    protected $url = 'beta/{division}/financial/GLAccountClassificationMappings';
}

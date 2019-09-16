<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLScheme.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLSchemes
 *
 * @property string $ID Primary key
 * @property string $Code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description text
 * @property int $Division Division is optional for this table. For taxonomies of Taxonomies.Type = 0 (general taxonomies), the Division is empty. For division specific taxonomies it is mandatory
 * @property int $Main Only used for reporting schemes = division specific taxonomynamespaces. In this case, main = 1 denotes the main or default reporting scheme
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $TargetNamespace URI, which is the unique identifier of the namespace
 */
class GLScheme extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'TargetNamespace',
    ];

    protected $url = 'financial/GLSchemes';
}

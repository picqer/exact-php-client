<?php 

namespace Picqer\Financials\Exact;

/**
 * Class GLScheme
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLSchemes
 * 
 * @property Guid $ID Primary key
 * @property String $Code 
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description text
 * @property Int32 $Division Division is optional for this table. For taxonomies of Taxonomies.Type = 0 (general taxonomies), the Division is empty. For division specific taxonomies it is mandatory
 * @property Byte $Main Only used for reporting schemes = division specific taxonomynamespaces. In this case, main = 1 denotes the main or default reporting scheme
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $TargetNamespace URI, which is the unique identifier of the namespace
 */
class GLScheme extends Model
{
    use Query\Findable;

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
        'TargetNamespace'
    ];

    protected $url = 'financial/GLSchemes';

}

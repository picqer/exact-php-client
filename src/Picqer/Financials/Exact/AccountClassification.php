<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountClassification
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmAccountClassifications
 *
 * @property string $ID Primary key
 * @property string $AccountClassificationName Reference to Account classification name
 * @property string $AccountClassificationNameDescription Description of AccountClassificationName
 * @property string $Code Account classification code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of AccountClassificationName
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class AccountClassification extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AccountClassificationName',
        'AccountClassificationNameDescription',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'crm/AccountClassifications';
}

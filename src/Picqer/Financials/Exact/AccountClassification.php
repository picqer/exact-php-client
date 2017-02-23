<?php namespace Picqer\Financials\Exact;

/**
 * Class AccountClassification
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAccountClassifications
 * 
 * @property Guid $ID Primary key
 * @property Guid $AccountClassificationName Reference to Account classification name
 * @property String $AccountClassificationNameDescription Description of AccountClassificationName
 * @property String $Code Account classification code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 */
class AccountClassification extends Model
{
    use Query\Findable;

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
        'ModifierFullName'
    ];

    protected $url = 'crm/AccountClassifications';

}

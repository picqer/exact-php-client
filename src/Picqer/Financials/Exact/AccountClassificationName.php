<?php namespace Picqer\Financials\Exact;

/**
 * Class AccountClassificationName
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAccountClassificationNames
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $SequenceNumber Sequence number
 */
class AccountClassificationName extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'SequenceNumber'
    ];

    protected $url = 'crm/AccountClassificationNames';

}

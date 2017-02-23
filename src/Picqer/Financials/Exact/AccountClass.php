<?php 

namespace Picqer\Financials\Exact;

/**
 * Class AccountClass
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAccountClasses
 * 
 * @property Guid $ID Primary key
 * @property String $Code Classification code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Guid $CreditManagementScenario Default credit management scenario to be used for new payment terms
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 */
class AccountClass extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'CreditManagementScenario',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName'
    ];

    protected $url = 'crm/AccountClasses';

}

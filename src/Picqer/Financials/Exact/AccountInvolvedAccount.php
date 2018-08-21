<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountInvolvedAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyAccountInvolvedAccounts
 *
 * @property string $ID Primary key
 * @property string $Account ID of account
 * @property String $AccountName Name of account
 * @property DateTime $Created Creation date
 * @property string $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property string $InvolvedAccount ID of involved account
 * @property String $InvolvedAccountRelationTypeDescription Description of relation type
 * @property Int32 $InvolvedAccountRelationTypeDescriptionTermId TermId of description of relation type
 * @property Int16 $InvolvedAccountRelationTypeId ID of relation type
 * @property DateTime $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Use to record details of important information
 */
class AccountInvolvedAccount extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'InvolvedAccount',
        'InvolvedAccountRelationTypeDescription',
        'InvolvedAccountRelationTypeDescriptionTermId',
        'InvolvedAccountRelationTypeId',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'accountancy/AccountInvolvedAccounts';

}

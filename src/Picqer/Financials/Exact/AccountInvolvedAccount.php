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
 * @property string $AccountName Name of account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $InvolvedAccount ID of involved account
 * @property string $InvolvedAccountRelationTypeDescription Description of relation type
 * @property int $InvolvedAccountRelationTypeDescriptionTermId TermId of description of relation type
 * @property int $InvolvedAccountRelationTypeId ID of relation type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Use to record details of important information
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

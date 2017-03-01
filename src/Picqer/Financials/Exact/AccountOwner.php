<?php 

namespace Picqer\Financials\Exact;

/**
 * Class AccountOwner
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyAccountOwners
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account ID of the account that is owned
 * @property String $AccountCode Code of the account that is owned
 * @property String $AccountName Name of the account that is owned
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the modifier
 * @property String $ModifierFullName Name of the modifier
 * @property Guid $OwnerAccount ID of the account who owns specified account
 * @property String $OwnerAccountCode Code of the account who owns specified account
 * @property String $OwnerAccountName Name of the account who owns specified account
 * @property Double $Shares Percentage of shares that is owned. 1 is 100%, 0.5 is 50%
 */
class AccountOwner extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OwnerAccount',
        'OwnerAccountCode',
        'OwnerAccountName',
        'Shares'
    ];

    protected $url = 'accountancy/AccountOwners';

}

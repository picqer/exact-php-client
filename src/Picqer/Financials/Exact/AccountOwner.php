<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountOwner.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyAccountOwners
 *
 * @property string $ID Primary key
 * @property string $Account ID of the account that is owned
 * @property string $AccountCode Code of the account that is owned
 * @property string $AccountName Name of the account that is owned
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
 * @property string $OwnerAccount ID of the account who owns specified account
 * @property string $OwnerAccountCode Code of the account who owns specified account
 * @property string $OwnerAccountName Name of the account who owns specified account
 * @property float $Shares Percentage of shares that is owned. 1 is 100%, 0.5 is 50%
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
        'Shares',
    ];

    protected $url = 'accountancy/AccountOwners';
}

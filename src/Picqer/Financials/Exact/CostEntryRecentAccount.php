<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentAccounts
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 * @property string $DateLastUsed Date last used
 */
class CostEntryRecentAccount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed',
    ];

    protected $url = 'read/project/CostEntryRecentAccounts';
}

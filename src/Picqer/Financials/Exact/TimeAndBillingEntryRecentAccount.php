<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentAccounts
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 * @property string $DateLastUsed Date last used
 */
class TimeAndBillingEntryRecentAccount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed',
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentAccounts';
}

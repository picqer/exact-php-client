<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentAccounts
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 * @property string $DateLastUsed Date last used
 */
class HourEntryRecentAccount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed',
    ];

    protected $url = 'read/project/HourEntryRecentAccounts';
}

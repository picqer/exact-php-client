<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentAccountsByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentAccountsByProject
 *
 * @property string $AccountId Guid ID of the account used for hour entries
 * @property string $AccountName Name of account
 * @property string $DateLastUsed The last date that the account has been used for hour entry
 */
class HourEntryRecentAccountsByProject extends Model
{
    use Query\Findable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed',
    ];

    protected $url = 'read/project/HourEntryRecentAccountsByProject';
}

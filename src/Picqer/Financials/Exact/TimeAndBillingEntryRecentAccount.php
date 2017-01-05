<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentAccounts
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountName Name of account
 * @property DateTime $DateLastUsed Date last used
 */
class TimeAndBillingEntryRecentAccount extends Model
{
    use Query\Findable;

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed'
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentAccounts';

}

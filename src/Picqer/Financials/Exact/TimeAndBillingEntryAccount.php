<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccounts
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountName Name of account
 */
class TimeAndBillingEntryAccount extends Model
{
    use Query\Findable;

    protected $fillable = [
        'AccountId',
        'AccountName'
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccounts';

}

<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccountsByDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccountsByDate
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountName Name of account
 */
class TimeAndBillingEntryAccountsByDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'checkDate';

    protected $fillable = [
        'AccountId',
        'AccountName'
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccountsByDate';

}

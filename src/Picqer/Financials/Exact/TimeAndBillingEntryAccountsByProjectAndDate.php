<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccountsByProjectAndDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccountsByProjectAndDate
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountName Name of account
 */
class TimeAndBillingEntryAccountsByProjectAndDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'AccountId';

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'AccountId',
        'AccountName'
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccountsByProjectAndDate';

}

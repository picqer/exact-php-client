<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProjectsByAccountAndDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjectsByAccountAndDate
 * 
 * @property Guid $ProjectId Primary key
 * @property String $ProjectCode Code
 * @property String $ProjectDescription Description
 */
class TimeAndBillingEntryProjectsByAccountAndDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'accountId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjectsByAccountAndDate';

}

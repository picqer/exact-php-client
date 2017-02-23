<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProjectsByDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjectsByDate
 * 
 * @property Guid $ProjectId Primary key
 * @property String $ProjectCode Code
 * @property String $ProjectDescription Description
 */
class TimeAndBillingEntryProjectsByDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'ProjectId';

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'checkDate';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjectsByDate';

}

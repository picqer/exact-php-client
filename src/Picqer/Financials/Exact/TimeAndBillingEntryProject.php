<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryProjects
 * 
 * @property Guid $ProjectId Primary key
 * @property String $ProjectCode Code
 * @property String $ProjectDescription Description
 */
class TimeAndBillingEntryProject extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'ProjectId';

    protected $fillable = [
        'ProjectId',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'read/project/TimeAndBillingEntryProjects';

}

<?php namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentAccountsByProject
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentAccountsByProject
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountName Name of account
 * @property DateTime $DateLastUsed Date last used
 */
class HourEntryRecentAccountsByProject extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed'
    ];

    protected $url = 'read/project/HourEntryRecentAccountsByProject';

}

<?php namespace Picqer\Financials\Exact;

/**
 * Class HoursByDate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHoursByDate
 * 
 * @property Int32 $Id Primary key
 * @property String $AccountCode Code of Account
 * @property Guid $AccountId Reference to Account
 * @property String $AccountName Name of Account
 * @property Guid $Activity Reference to Activity
 * @property String $ActivityDescription Description of Activity
 * @property DateTime $Date Date
 * @property Guid $EntryId Entry ID
 * @property Double $HoursApproved Hours approved
 * @property Double $HoursApprovedBillable Billable hours approved
 * @property Double $HoursDraft Hours draft
 * @property Double $HoursDraftBillable Billable hours draft
 * @property Double $HoursRejected Hours rejected
 * @property Double $HoursRejectedBillable Billable hours rejected
 * @property Double $HoursSubmitted Hours submitted
 * @property Double $HoursSubmittedBillable Billable hours submitted
 * @property String $ItemCode Code of Item
 * @property String $ItemDescription Description of Item
 * @property Guid $ItemId Reference to Item
 * @property String $Notes Remarks
 * @property String $ProjectCode Code of Project
 * @property String $ProjectDescription Description of Project
 * @property Guid $ProjectId Reference to Project
 * @property Int32 $WeekNumber Week number
 */
class HoursByDate extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Id';

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'checkDate';

    protected $fillable = [
        'Id',
        'AccountCode',
        'AccountId',
        'AccountName',
        'Activity',
        'ActivityDescription',
        'Date',
        'EntryId',
        'HoursApproved',
        'HoursApprovedBillable',
        'HoursDraft',
        'HoursDraftBillable',
        'HoursRejected',
        'HoursRejectedBillable',
        'HoursSubmitted',
        'HoursSubmittedBillable',
        'ItemCode',
        'ItemDescription',
        'ItemId',
        'Notes',
        'ProjectCode',
        'ProjectDescription',
        'ProjectId',
        'WeekNumber'
    ];

    protected $url = 'read/project/HoursByDate';

}

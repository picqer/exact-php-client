<?php

namespace Picqer\Financials\Exact;

/**
 * Class HoursByDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHoursByDate
 *
 * @property int $Id Primary key
 * @property string $AccountCode Code of Account
 * @property string $AccountId Reference to Account
 * @property string $AccountName Name of Account
 * @property string $Activity Reference to Activity
 * @property string $ActivityDescription Description of Activity
 * @property string $Date Date
 * @property string $EntryId Entry ID
 * @property float $HoursApproved Hours approved
 * @property float $HoursApprovedBillable Billable hours approved
 * @property float $HoursDraft Hours draft
 * @property float $HoursDraftBillable Billable hours draft
 * @property float $HoursRejected Hours rejected
 * @property float $HoursRejectedBillable Billable hours rejected
 * @property float $HoursSubmitted Hours submitted
 * @property float $HoursSubmittedBillable Billable hours submitted
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $ItemId Reference to Item
 * @property string $Notes Remarks
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property string $ProjectId Reference to Project
 * @property int $WeekNumber Week number
 */
class HoursByDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Id';

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
        'WeekNumber',
    ];

    protected $url = 'read/project/HoursByDate?checkDate={Edm.DateTime}';
}

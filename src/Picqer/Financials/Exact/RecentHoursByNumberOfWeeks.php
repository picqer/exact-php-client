<?php

namespace Picqer\Financials\Exact;

/**
 * Class RecentHoursByNumberOfWeeks.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectRecentHoursByNumberOfWeeks
 *
 * @property int $Id Primary key
 * @property string $AccountCode Code of account linked to the project that hours are being entered to
 * @property string $AccountId ID of account linked to the project that hours are being entered to
 * @property string $AccountName Name of account linked to the project that hours are being entered to
 * @property string $Activity The activity of the project that the hours are entered to
 * @property string $ActivityDescription Name of activity of the project that the hours are entered to
 * @property string $Date Date of hour entry record by week
 * @property string $EntryId Entry ID of record
 * @property float $HoursApproved Hours approved
 * @property float $HoursApprovedBillable Billable hours that is approved
 * @property float $HoursDraft Hours saved as draft
 * @property float $HoursDraftBillable Billable hours saved as draft
 * @property float $HoursRejected Hours that are rejected
 * @property float $HoursRejectedBillable Billable hours that are rejected
 * @property float $HoursSubmitted Hours that are submitted
 * @property float $HoursSubmittedBillable Billable hours that are submitted
 * @property string $ItemCode Code of the item that is used for hours
 * @property string $ItemDescription Description of the item that is used for hours
 * @property string $ItemId ID of the item that is used for hours
 * @property string $Notes Notes entered regarding the information of the hours entered
 * @property string $ProjectCode Code of project that the hours are entered on
 * @property string $ProjectDescription Description of project that the hours are entered on
 * @property string $ProjectId ID of project that the hours are entered on
 * @property int $WeekNumber The week number that the hours are entered on
 */
class RecentHoursByNumberOfWeeks extends Model
{
    use Query\Findable;

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

    protected $url = 'read/project/RecentHoursByNumberOfWeeks';
}

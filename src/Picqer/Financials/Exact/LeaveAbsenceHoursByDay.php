<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeaveAbsenceHoursByDay.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMLeaveAbsenceHoursByDay
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Date Date of leave or absence
 * @property int $Division Division code
 * @property string $Employee ID of employee linked to the leave or absence
 * @property string $EmployeeFullName Employee full name
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $Employment Employment ID
 * @property int $EmploymentHID Numeric ID of the employment
 * @property string $EndTime End time of leave or absence
 * @property int $ExternalIDInt Unique ID from external source. Eg. Exact Online HR
 * @property int $ExternalLeaveAbsenceType Unique leave or absence type from external source. Eg. Exact Online HR
 * @property float $Hours Hours of leave or absence
 * @property string $Modified Last modified date
 * @property string $StartTime Start time of leave or absence
 * @property int $Status Status, 1 = Submitted, 2 = ApprovedNote: Submitted status is only applicable for Type = Leave
 * @property int $Type Type, 0 = Leave, 1 = AbsenceNote: Absence type is only allow for Status = Approved
 */
class LeaveAbsenceHoursByDay extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Date',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Employment',
        'EmploymentHID',
        'EndTime',
        'ExternalIDInt',
        'ExternalLeaveAbsenceType',
        'Hours',
        'Modified',
        'StartTime',
        'Status',
        'Type',
    ];

    protected $url = 'hrm/LeaveAbsenceHoursByDay';
}

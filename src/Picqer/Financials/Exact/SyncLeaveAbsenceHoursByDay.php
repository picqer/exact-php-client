<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncLeaveAbsenceHoursByDay.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncHRMLeaveAbsenceHoursByDay
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Date Date of leave or absence
 * @property int $Division Division code
 * @property string $Employee ID of employee linked to the leave or absence
 * @property string $EmployeeFullName Employee full name
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $Employment Employment ID
 * @property int $EmploymentHID Numeric ID of the employment
 * @property string $EndTime End time of leave or absence
 * @property float $Hours Hours of leave or absence
 * @property string $ID Primary key
 * @property string $Modified Last modified date
 * @property string $StartTime Start time of leave or absence
 * @property int $Status Status, 1 = Submitted, 2 = ApprovedNote: Submitted status is only applicable for Type = Leave
 * @property int $Type Type, 0 = Leave, 1 = AbsenceNote: Absence type is only allow for Status = Approved
 */
class SyncLeaveAbsenceHoursByDay extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Date',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Employment',
        'EmploymentHID',
        'EndTime',
        'Hours',
        'ID',
        'Modified',
        'StartTime',
        'Status',
        'Type',
    ];

    protected $url = 'sync/HRM/LeaveAbsenceHoursByDay';
}

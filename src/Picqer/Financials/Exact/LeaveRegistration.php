<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeaveRegistration.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMLeaveRegistrations
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of leave
 * @property int $Division Division code
 * @property string $Employee Employee linked to the leave registration
 * @property string $EmployeeFullName Employee full name
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $EndDate End date of leave
 * @property string $EndTime End time on the last day of leave stored as DateTime, and the date should be ignored
 * @property float $Hours Total number of leave hours
 * @property float $HoursFirstDay Hours of leave on the first day
 * @property float $HoursLastDay Hours of leave on the last day
 * @property string $LeaveType Type of leave
 * @property string $LeaveTypeCode Code for type of leave
 * @property string $LeaveTypeDescription Description for type of leave
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra information for leave
 * @property string $StartDate Start date of leave
 * @property string $StartTime Start time on the first day of leave stored as DateTime, and the date should be ignored
 * @property int $Status Status of leave, 1 = Submitted, 2 = Approved, 3 = Rejected
 */
class LeaveRegistration extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'EndDate',
        'EndTime',
        'Hours',
        'HoursFirstDay',
        'HoursLastDay',
        'LeaveType',
        'LeaveTypeCode',
        'LeaveTypeDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'StartDate',
        'StartTime',
        'Status',
    ];

    protected $url = 'hrm/LeaveRegistrations';
}

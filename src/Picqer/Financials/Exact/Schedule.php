<?php

namespace Picqer\Financials\Exact;

/**
 * Class Schedule.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMSchedules
 *
 * @property string $ID Primary key
 * @property float $AverageHours Average hours per week in a schedulePlease be aware this property is mandatory if you use ScheduleType 1 or 2.For Time and Billing basic company, when creating a new schedule, the value is set to 0. When schedule entries are created, the BC will set the calculated value for Average hours per week.
 * @property float $BillabilityTarget Billability target
 * @property string $Code Schedule code
 * @property string $Created Creation date
 * @property string $Creator ID of creator
 * @property string $CreatorFullName Name of the creator
 * @property float $Days Average days per week in the scheduleFor Time and Billing basic company, when creating a new schedule, the value is set to 0. When schedule entries are created, the BC will set the calculated value for Average days per week.
 * @property string $Description Description of the schedule
 * @property int $Division Division code
 * @property string $Employee Employee ID of the schedule
 * @property string $EmployeeFullName Employee full name of the schedule
 * @property string $Employment Employment ID for schedule
 * @property string $EmploymentCLA Employment CLA ID of the schedule
 * @property int $EmploymentNumber Employment number
 * @property string $EndDate End date of the schedule
 * @property float $Hours Number of hours per week in a CLA for which the schedule is built
 * @property float $LeaveHoursCompensation Number of hours which are built up each week for later leaveFor Time and Billing basic company, the value is set to 0.
 * @property int $Main Indication if the schedule is a main schedule for a CLA. 1 = Yes, 0 = No
 * @property string $Modified Last modified date
 * @property string $Modifier ID of modifier
 * @property string $ModifierFullName Name of the modifier
 * @property float $PaymentParttimeFactor Part-time factor for payroll calculation. Value between 0 and 1
 * @property ScheduleEntry[] $ScheduleEntries The collection of schedule entries
 * @property int $ScheduleType Type of schedule. 1 = Hours and average days, 2 = Hours and specific days, 3 = Hours per day, 4 = Time frames per day1 - Hours and average days, StartWeek will automatically set to 12 - Hours and specific days, StartWeek must be greater or equal to 1, AverageDaysPerWeek will automatically set to 03 - Hours per day, StartWeek must be greater or equal to 1, AverageHoursPerWeek and AverageDaysPerWeek will automatically set to 04 - Time frames per day, Hours per day, StartWeek must be greater or equal to 1, AverageHoursPerWeek and AverageDaysPerWeek will automatically set to 0Note: For Time and Billing basic company, the schedule type is automatically set to value "3 - Hour per day".
 * @property string $ScheduleTypeDescription Description of the schedule type
 * @property string $StartDate Start date of the schedule
 * @property int $StartWeek Week to start the schedule from for an employee
 */
class Schedule extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AverageHours',
        'BillabilityTarget',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Days',
        'Description',
        'Division',
        'Employee',
        'EmployeeFullName',
        'Employment',
        'EmploymentCLA',
        'EmploymentNumber',
        'EndDate',
        'Hours',
        'LeaveHoursCompensation',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentParttimeFactor',
        'ScheduleEntries',
        'ScheduleType',
        'ScheduleTypeDescription',
        'StartDate',
        'StartWeek',
    ];

    protected $url = 'hrm/Schedules';
}

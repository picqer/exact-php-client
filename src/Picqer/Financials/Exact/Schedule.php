<?php

namespace Picqer\Financials\Exact;

/**
 * Class Schedule
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMSchedules
 *
 * @property string $ID Primary key
 * @property int $Active Obsolete
 * @property float $AverageHours Average hours per week in a schedule
 * @property string $Code Schedule code
 * @property string $Created Creation date
 * @property string $Creator ID of creator
 * @property string $CreatorFullName Name of the creator
 * @property float $Days Average days per week in the schedule
 * @property string $Description Description of the schedule
 * @property int $Division Division code
 * @property string $Employment Employment ID for schedule
 * @property int $EmploymentHID Employment number
 * @property string $EndDate End date of the schedule
 * @property float $Hours Number of hours per week in a CLA for which the schedule is built
 * @property float $LeaveHoursCompensation Number of hours which are built up each week for later leave
 * @property int $Main Indication if the schedule is a main schedule for a CLA. 1 = Yes, 0 = No
 * @property string $Modified Last modified date
 * @property string $Modifier ID of modifier
 * @property string $ModifierFullName Name of the modifier
 * @property float $PaymentParttimeFactor Part-time factor for payroll calculation. Value between 0 and 1
 * @property int $ScheduleType Type of schedule. 1 = Hours and average days, 2 = Hours and specific days, 3 = Hours per day, 4 = Time frames per day
 * @property string $ScheduleTypeDescription Description of the schedule type
 * @property string $StartDate Week in the schedule which is used to start with. By default the number will be 1.
 * @property int $StartWeek Week to start the schedule from for an employee
 */
class Schedule extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Active',
        'AverageHours',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Days',
        'Description',
        'Division',
        'Employment',
        'EmploymentHID',
        'EndDate',
        'Hours',
        'LeaveHoursCompensation',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentParttimeFactor',
        'ScheduleType',
        'ScheduleTypeDescription',
        'StartDate',
        'StartWeek',
    ];

    protected $url = 'hrm/Schedules';
}

<?php namespace Picqer\Financials\Exact;

/**
 * Class Schedule
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMSchedules
 * 
 * @property Guid $ID Primary key
 * @property Byte $Active Indicates if the schedule is active. 0 = Inactive, 1 = Active
 * @property Double $AverageHours Average hours per week in a schedule
 * @property String $Code Schedule code
 * @property DateTime $Created Creation date
 * @property Guid $Creator ID of creator
 * @property String $CreatorFullName Name of the creator
 * @property Double $Days Average days per week in the schedule
 * @property String $Description Description of the schedule
 * @property Int32 $Division Division code
 * @property Guid $Employment Employment ID for schedule
 * @property Int32 $EmploymentHID Employment number
 * @property DateTime $EndDate End date of the schedule
 * @property Double $Hours Number of hours per week in a CLA for which the schedule is built
 * @property Double $LeaveHoursCompensation Number of hours which are built up each week for later leave
 * @property Byte $Main Indication if the schedule is a main schedule for a CLA. 1 = Yes, 0 = No
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier ID of modifier
 * @property String $ModifierFullName Name of the modifier
 * @property Double $PaymentParttimeFactor Part-time factor for payroll calculation. Value between 0 and 1
 * @property Int32 $ScheduleType Type of schedule. 1 = Hours and average days, 2 = Hours and specific days, 3 = Hours per day, 4 = Time frames per day
 * @property String $ScheduleTypeDescription Description of the schedule type
 * @property DateTime $StartDate Week in the schedule which is used to start with. By default the number will be 1.
 * @property Int32 $StartWeek Week to start the schedule from for an employee
 */
class Schedule extends Model
{
    use Query\Findable;

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
        'StartWeek'
    ];

    protected $url = 'hrm/Schedules';

}

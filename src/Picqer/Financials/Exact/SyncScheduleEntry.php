<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncScheduleEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncHRMScheduleEntries
 *
 * @property int $Timestamp Timestamp
 * @property bool $Break This property is for Schedule type 4 (Time frames per day). Set to true if there is break time else false.
 * @property string $BreakEndTime This is the break end time. This property is for Schedule type 4 (Time frames per day)
 * @property string $BreakStartTime This is the break start time. This property is for Schedule type 4 (Time frames per day)
 * @property string $Created Created date.
 * @property string $Creator User ID of creator.
 * @property string $CreatorFullName Name of creator
 * @property int $Day The day in the week. 0 - Monday; 1 - Tuesday; 2 - Wednesday; 3 - Thursday; 4 - Friday; 5 - Saturday; 6 - Sunday
 * @property bool $DayIsSelected This property is required for Schedule type 2 (Hours and specific days).
 * @property int $Division Division code
 * @property string $Employee Identifier of the employee
 * @property string $EmployeeFullName Name of employee
 * @property string $Employment Employment ID
 * @property int $EmploymentNumber Employment number
 * @property string $EndTime This is the end time of the work day. This property is for Schedule type 4 (Time frames per day)
 * @property string $Hours Set the total number of hours for per day. This property is for Schedule type 3 (Hours per day). Values should be in 'HH:mm' format, eg : 08:00
 * @property string $ID Primary key
 * @property string $Modified Last modified date.
 * @property string $Modifier User ID of modifier.
 * @property string $ModifierFullName Name of modifier
 * @property string $Schedule The id of the schedule linked to this schedule entry.
 * @property int $ScheduleType This is the schedule type id based on the Schedule. 1 - Hours and average days; 2 - Hours and specific days; 3 - Hours per day; 4 - Time frames per day
 * @property string $StartTime This is the start time of the work day. This property is for Schedule type 4 (Time frames per day)
 * @property int $WeekNumber This is the week number .
 */
class SyncScheduleEntry extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Break',
        'BreakEndTime',
        'BreakStartTime',
        'Created',
        'Creator',
        'CreatorFullName',
        'Day',
        'DayIsSelected',
        'Division',
        'Employee',
        'EmployeeFullName',
        'Employment',
        'EmploymentNumber',
        'EndTime',
        'Hours',
        'ID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Schedule',
        'ScheduleType',
        'StartTime',
        'WeekNumber',
    ];

    protected $url = 'sync/HRM/ScheduleEntries';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncScheduleEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncHRMScheduleEntries
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Created date.
 * @property string $Creator ID of creator.
 * @property string $CreatorFullName Name of creator
 * @property int $Day The day in the week. 0 - Monday; 1 - Tuesday; 2 - Wednesday; 3 - Thursday; 4 - Friday; 5 - Saturday; 6 - Sunday
 * @property int $Division Division code
 * @property string $EndTime This is the end time of the schedule entry.
 * @property string $Hours The total number of hours for per day. Values is in 'HH:mm' format, eg : 08:00
 * @property string $ID Primary key
 * @property string $Modified Last modified date.
 * @property string $Modifier ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Schedule The id of the schedule linked to this schedule entry.
 * @property int $ScheduleActivityType The activity of the schedule entry. 0 - Work; 1 - Pause
 * @property string $StartTime This is the start time of the schedule entry.
 * @property int $WeekNumber This is the week number.
 */
class SyncScheduleEntry extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Day',
        'Division',
        'EndTime',
        'Hours',
        'ID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Schedule',
        'ScheduleActivityType',
        'StartTime',
        'WeekNumber',
    ];

    protected $url = 'sync/HRM/ScheduleEntries';
}

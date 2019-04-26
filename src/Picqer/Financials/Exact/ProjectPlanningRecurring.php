<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectPlanningRecurring.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectPlanningRecurring
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the recurring planning
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property int $BGTStatus Status of the project planning process, 1 = To be processed, 2 = Processed, 3 = Failed
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $DayOrThe Indicates whether the recurring planning is day of the month or weekday of the month
 * @property string $Description Description of recurring planning
 * @property int $Division Division code
 * @property string $Employee Employee linked to the recurring planning
 * @property string $EmployeeCode Code of employee
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $EndDate End date of the recurring planning
 * @property int $EndDateOrAfter Indicates whether the recurring planning is end on end date or end after number of times
 * @property string $EndTime End time for the recurring planning to be active
 * @property float $Hours Number of hours for the recurring planning
 * @property string $HourType Hour type of the recurring planning, item with 'Time' type
 * @property string $HourTypeCode Code of the hour type
 * @property string $HourTypeDescription Description of the hour type
 * @property string $Modified Date modified
 * @property string $Modifier Modifier user ID
 * @property string $ModifierFullName Modifier name
 * @property int $MonthPatternDay Day of the monthly recurring
 * @property int $MonthPatternOrdinalDay Ordinal number of week day for the monthly recurring planning, 1 = first, 2 = second, 3 = third, 4 = fourth, 31 = last
 * @property int $MonthPatternOrdinalWeek Ordinal week day of the monthly recurring planning, 1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday, 7 = Sunday
 * @property string $Notes For additional information about recurring planning
 * @property int $NumberOfRecurrences Number of times the planning recurs
 * @property bool $OverAllocate Indicates whether the entries can have over allocated planning hours
 * @property int $PatternFrequency Number of planning times for weekly or monthly recurring planning
 * @property string $Project Project linked to the recurring planning
 * @property string $ProjectCode Code of project
 * @property string $ProjectDescription Description of project
 * @property int $ProjectPlanningRecurringType Type of the recurring planning, 1 = weekly, 2 = monthly
 * @property string $ProjectWBS WBS linked to the recurring planning
 * @property string $ProjectWBSDescription Description of WBS
 * @property string $StartDate Start date of the recurring planning
 * @property string $StartTime Start time for the recurring planning to be active
 * @property int $Status Status of the project planning, 1 = Reserved, 2 = Planned
 * @property int $WeekPatternDay Week day for the weekly recurring planning
 * @property bool $WeekPatternFriday Create planning on Friday, apply to weekly pattern recurring planning only
 * @property bool $WeekPatternMonday Create planning on Monday, apply to weekly pattern recurring planning only
 * @property bool $WeekPatternSaturday Create planning on Saturday, apply to weekly pattern recurring planning only
 * @property bool $WeekPatternSunday Create planning on Sunday, apply to weekly pattern recurring planning only
 * @property bool $WeekPatternThursday Create planning on Thursday, apply to weekly pattern recurring planning only
 * @property bool $WeekPatternTuesday Create planning on Tuesday, apply to weekly pattern recurring planning only
 * @property bool $WeekPatternWednesday Create planning on Wednesday, apply to weekly pattern recurring planning only
 */
class ProjectPlanningRecurring extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'BGTStatus',
        'Created',
        'Creator',
        'CreatorFullName',
        'DayOrThe',
        'Description',
        'Division',
        'Employee',
        'EmployeeCode',
        'EmployeeHID',
        'EndDate',
        'EndDateOrAfter',
        'EndTime',
        'Hours',
        'HourType',
        'HourTypeCode',
        'HourTypeDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'MonthPatternDay',
        'MonthPatternOrdinalDay',
        'MonthPatternOrdinalWeek',
        'Notes',
        'NumberOfRecurrences',
        'OverAllocate',
        'PatternFrequency',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'ProjectPlanningRecurringType',
        'ProjectWBS',
        'ProjectWBSDescription',
        'StartDate',
        'StartTime',
        'Status',
        'WeekPatternDay',
        'WeekPatternFriday',
        'WeekPatternMonday',
        'WeekPatternSaturday',
        'WeekPatternSunday',
        'WeekPatternThursday',
        'WeekPatternTuesday',
        'WeekPatternWednesday',
    ];

    protected $url = 'project/ProjectPlanningRecurring';
}

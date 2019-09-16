<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentSalary.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentSalaries
 *
 * @property string $ID Primary key
 * @property float $AverageDaysPerWeek The average number of contract days that an employee works per week
 * @property float $AverageHoursPerWeek The average number of contract hours that an employee works per week
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee Employee ID
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Employee number
 * @property string $Employment Employment
 * @property int $EmploymentHID Employment number
 * @property int $EmploymentSalaryType Salary type of employment. 1 - Periodical (fixed), 2 - Per hour (variable)
 * @property string $EmploymentSalaryTypeDescription Salary type description
 * @property string $EndDate Salary record end date
 * @property float $FulltimeAmount Salary when working fulltime
 * @property float $HourlyWage Hourly wage
 * @property float $InternalRate Internal rate for time & billing or professional service user
 * @property int $JobLevel Employee job level in context of a wage scale
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $ParttimeAmount Salary when working parttime
 * @property float $ParttimeFactor Contract hours / Fulltime contract hours
 * @property string $Scale Employee wage scale
 * @property string $Schedule Employment schedule
 * @property string $ScheduleCode Employment schedule code
 * @property string $ScheduleDescription Description of employment schedule
 * @property string $StartDate Salary record start date
 */
class EmploymentSalary extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AverageDaysPerWeek',
        'AverageHoursPerWeek',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Employment',
        'EmploymentHID',
        'EmploymentSalaryType',
        'EmploymentSalaryTypeDescription',
        'EndDate',
        'FulltimeAmount',
        'HourlyWage',
        'InternalRate',
        'JobLevel',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ParttimeAmount',
        'ParttimeFactor',
        'Scale',
        'Schedule',
        'ScheduleCode',
        'ScheduleDescription',
        'StartDate',
    ];

    protected $url = 'payroll/EmploymentSalaries';
}

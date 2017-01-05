<?php namespace Picqer\Financials\Exact;

/**
 * Class EmploymentSalary
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentSalaries
 * 
 * @property Guid $ID Primary key
 * @property Double $AverageDaysPerWeek The average number of contract days that an employee works per week
 * @property Double $AverageHoursPerWeek The average number of contract hours that an employee works per week
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $Employee Employee ID
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Employee number
 * @property Guid $Employment Employment
 * @property Int32 $EmploymentHID Employment number
 * @property Int32 $EmploymentSalaryType Salary type of employment. 1 - Periodical (fixed), 2 - Per hour (variable)
 * @property String $EmploymentSalaryTypeDescription Salary type description
 * @property DateTime $EndDate Salary record end date
 * @property Double $FulltimeAmount Salary when working fulltime
 * @property Double $HourlyWage Hourly wage
 * @property Double $InternalRate Internal rate for time & billing or professional service user
 * @property Int32 $JobLevel Employee job level in context of a wage scale
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $ParttimeAmount Salary when working parttime
 * @property Double $ParttimeFactor Contract hours / Fulltime contract hours
 * @property String $Scale Employee wage scale
 * @property Guid $Schedule Employment schedule
 * @property String $ScheduleCode Employment schedule code
 * @property String $ScheduleDescription Description of employment schedule
 * @property DateTime $StartDate Salary record start date
 */
class EmploymentSalary extends Model
{
    use Query\Findable;

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
        'StartDate'
    ];

    protected $url = 'payroll/EmploymentSalaries';

}

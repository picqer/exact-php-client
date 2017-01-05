<?php namespace Picqer\Financials\Exact;

/**
 * Class ActiveEmployment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollActiveEmployments
 * 
 * @property Guid $ID Primary key
 * @property Double $AverageDaysPerWeek The average number of contract days that an employee works per week
 * @property Double $AverageHoursPerWeek The average number of contract hours that an employee works per week
 * @property Guid $Contract Employment contract ID
 * @property Guid $ContractDocument Document ID of the employment contract
 * @property DateTime $ContractEndDate End date of employment contract
 * @property DateTime $ContractProbationEndDate Employment probation end date
 * @property Int32 $ContractProbationPeriod Employment probation period
 * @property DateTime $ContractStartDate Start date of employment contract
 * @property Int32 $ContractType Type of employment contract. 1 - Definite, 2 - Indefinite, 3 - External
 * @property String $ContractTypeDescription Description of employment contract type
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Guid $Department Department of employee
 * @property String $DepartmentCode Department code of employee
 * @property String $DepartmentDescription Description of department
 * @property Int32 $Division Division code
 * @property Guid $Employee Employee ID
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Numeric number of Employee
 * @property Guid $EmploymentOrganization Organization of employment
 * @property DateTime $EndDate End date of employment
 * @property Int32 $HID Numeric ID of the employment
 * @property Double $HourlyWage Hourly wage
 * @property Double $InternalRate Internal rate for time & billing or professional service user
 * @property Guid $Jobtitle Job title of employee
 * @property String $JobtitleDescription Description of job title
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $ReasonEnd ID of employment ended
 * @property String $ReasonEndDescription Reason of end of employment
 * @property Int32 $ReasonEndFlex Reason of ended flexible employment
 * @property String $ReasonEndFlexDescription Other reason for end of employment
 * @property Guid $Salary Employment salary
 * @property Guid $Schedule Work schedule
 * @property Double $ScheduleAverageHours Average hours per week in a schedule.
 * @property String $ScheduleCode Work schedule code
 * @property Double $ScheduleDays Number of days of work per week
 * @property String $ScheduleDescription Description of work schedule
 * @property Double $ScheduleHours Number of work hours per week.
 * @property DateTime $StartDate Start date of employment
 * @property DateTime $StartDateOrganization Start date of the employee in the organization. This field is used to count the years in service.
 */
class ActiveEmployment extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AverageDaysPerWeek',
        'AverageHoursPerWeek',
        'Contract',
        'ContractDocument',
        'ContractEndDate',
        'ContractProbationEndDate',
        'ContractProbationPeriod',
        'ContractStartDate',
        'ContractType',
        'ContractTypeDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Department',
        'DepartmentCode',
        'DepartmentDescription',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'EmploymentOrganization',
        'EndDate',
        'HID',
        'HourlyWage',
        'InternalRate',
        'Jobtitle',
        'JobtitleDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ReasonEnd',
        'ReasonEndDescription',
        'ReasonEndFlex',
        'ReasonEndFlexDescription',
        'Salary',
        'Schedule',
        'ScheduleAverageHours',
        'ScheduleCode',
        'ScheduleDays',
        'ScheduleDescription',
        'ScheduleHours',
        'StartDate',
        'StartDateOrganization'
    ];

    protected $url = 'payroll/ActiveEmployments';

}

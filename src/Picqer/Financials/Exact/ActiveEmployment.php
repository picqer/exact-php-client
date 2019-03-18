<?php

namespace Picqer\Financials\Exact;

/**
 * Class ActiveEmployment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollActiveEmployments
 *
 * @property string $ID Primary key
 * @property float $AverageDaysPerWeek The average number of contract days that an employee works per week
 * @property float $AverageHoursPerWeek The average number of contract hours that an employee works per week
 * @property string $Contract Employment contract ID
 * @property string $ContractDocument Document ID of the employment contract
 * @property string $ContractEndDate End date of employment contract
 * @property string $ContractProbationEndDate Employment probation end date
 * @property int $ContractProbationPeriod Employment probation period
 * @property string $ContractStartDate Start date of employment contract
 * @property int $ContractType Type of employment contract. 1 - Definite, 2 - Indefinite, 3 - External
 * @property string $ContractTypeDescription Description of employment contract type
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Department Department of employee
 * @property string $DepartmentCode Department code of employee
 * @property string $DepartmentDescription Description of department
 * @property int $Division Division code
 * @property string $Employee Employee ID
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Numeric number of Employee
 * @property string $EmploymentOrganization Organization of employment
 * @property string $EndDate End date of employment
 * @property int $HID Numeric ID of the employment
 * @property float $HourlyWage Hourly wage
 * @property float $InternalRate Internal rate for time & billing or professional service user
 * @property string $Jobtitle Job title of employee
 * @property string $JobtitleDescription Description of job title
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $ReasonEnd ID of employment ended
 * @property string $ReasonEndDescription Reason of end of employment
 * @property int $ReasonEndFlex Reason of ended flexible employment
 * @property string $ReasonEndFlexDescription Other reason for end of employment
 * @property string $Salary Employment salary
 * @property string $Schedule Work schedule
 * @property float $ScheduleAverageHours Average hours per week in a schedule.
 * @property string $ScheduleCode Work schedule code
 * @property float $ScheduleDays Number of days of work per week
 * @property string $ScheduleDescription Description of work schedule
 * @property float $ScheduleHours Number of work hours per week.
 * @property string $StartDate Start date of employment
 * @property string $StartDateOrganization Start date of the employee in the organization. This field is used to count the years in service.
 */
class ActiveEmployment extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'StartDateOrganization',
    ];

    protected $url = 'payroll/ActiveEmployments';
}

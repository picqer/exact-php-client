<?php namespace Picqer\Financials\Exact;

/**
 * Class EmploymentOrganization
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentOrganizations
 * 
 * @property Guid $ID Primary key
 * @property String $CostCenter Cost center code
 * @property String $CostCenterDescription Description of cost center
 * @property String $CostUnit Cost unit code
 * @property String $CostUnitDescription Description of cost unit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Guid $Department ID of department
 * @property String $DepartmentCode Department code
 * @property String $DepartmentDescription Department description for organization
 * @property Int32 $Division Division code
 * @property Guid $Employee ID of employee
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Numeric ID of the employee
 * @property Guid $Employment Employement ID
 * @property Int32 $EmploymentHID Numeric ID of the employment
 * @property DateTime $EndDate Organization end date
 * @property Guid $JobTitle ID of job title
 * @property String $JobTitleCode Job title code
 * @property String $JobTitleDescription Job title description
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Explanation or extra information can be stored in the notes
 * @property DateTime $StartDate Organization start date
 */
class EmploymentOrganization extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
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
        'Employment',
        'EmploymentHID',
        'EndDate',
        'JobTitle',
        'JobTitleCode',
        'JobTitleDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'StartDate'
    ];

    protected $url = 'payroll/EmploymentOrganizations';

}

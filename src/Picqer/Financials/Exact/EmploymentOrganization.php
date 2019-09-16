<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentOrganization.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentOrganizations
 *
 * @property string $ID Primary key
 * @property string $CostCenter Cost center code
 * @property string $CostCenterDescription Description of cost center
 * @property string $CostUnit Cost unit code
 * @property string $CostUnitDescription Description of cost unit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Department ID of department
 * @property string $DepartmentCode Department code
 * @property string $DepartmentDescription Department description for organization
 * @property int $Division Division code
 * @property string $Employee ID of employee
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $Employment Employement ID
 * @property int $EmploymentHID Numeric ID of the employment
 * @property string $EndDate Organization end date
 * @property string $JobTitle ID of job title
 * @property string $JobTitleCode Job title code
 * @property string $JobTitleDescription Job title description
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Explanation or extra information can be stored in the notes
 * @property string $StartDate Organization start date
 */
class EmploymentOrganization extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'StartDate',
    ];

    protected $url = 'payroll/EmploymentOrganizations';
}

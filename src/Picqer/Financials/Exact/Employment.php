<?php namespace Picqer\Financials\Exact;

/**
 * Class Employment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmployments
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $Employee Employee ID
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Numeric number of Employee
 * @property DateTime $EndDate End date of employment
 * @property Int32 $HID Numeric ID of the employment
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $ReasonEnd ID of employment ended
 * @property String $ReasonEndDescription Reason of end of employment
 * @property Int32 $ReasonEndFlex Reason of ended flexible employment
 * @property String $ReasonEndFlexDescription Other reason for end of employment
 * @property DateTime $StartDate Start date of employment
 * @property DateTime $StartDateOrganization Start date of the employee in the organization. This field is used to count the years in service.
 */
class Employment extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'EndDate',
        'HID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ReasonEnd',
        'ReasonEndDescription',
        'ReasonEndFlex',
        'ReasonEndFlexDescription',
        'StartDate',
        'StartDateOrganization'
    ];

    protected $url = 'payroll/Employments';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PayrollTransactionsByPayrollYear.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollPayrollTransactionsByPayrollYear
 *
 * @property string $ID Transaction
 * @property float $CalculatedAmount Calculated amount
 * @property float $CalculatedBaseValue Calculated base value
 * @property float $CalculatedFranchise Calculated franchise
 * @property float $CalculatedMaximum Calculated maximum
 * @property float $CalculatedNumber Calculated number
 * @property string $CostCenter Cost center
 * @property string $CostCenterCode Cost center code
 * @property string $CostCenterDescription Cost center description
 * @property string $CostUnit Cost unit
 * @property string $CostUnitCode Cost unit code
 * @property string $CostUnitDescription Cost unit description
 * @property string $Created Creation date
 * @property string $Creator Creator
 * @property string $CreatorFullName Creator full name
 * @property string $Date Date
 * @property string $Department Department
 * @property string $DepartmentCode Department code
 * @property string $DepartmentDescription Department description
 * @property int $Division Division code
 * @property string $Employee Employee
 * @property int $EmployeeHID Employee number
 * @property string $Employment Employment
 * @property string $EmploymentConditionGroup Employment condition group
 * @property string $EmploymentConditionGroupCode Employment condition group code
 * @property string $EmploymentConditionGroupDescription Employment condition group description
 * @property float $EntryAmount Entry amount
 * @property float $EntryBase Entry base
 * @property float $EntryNumber Entry number
 * @property float $EntryPercentage Entry percentage
 * @property float $EntryPercentage2 Second entry percentage
 * @property int $EntryType Entry type
 * @property string $EntryTypeDescription Entry type description
 * @property int $Frequency Frequency: 1 - Yearly, 2 - Quarterly, 3 - Monthly, 4 - 4-weekly, 5 - Weekly, 11 - Yearly (Pro forma), 12 - Quarterly (Pro forma), 13 - Monthly (Pro forma), 14 - 4-Weekly (Pro forma), 15 - Weekly (Pro forma)
 * @property string $FullName Name of employee
 * @property string $ModifiedDate Last modified date
 * @property string $Modifier Modifier
 * @property string $ModifierFullName Modifier full name
 * @property string $PayrollComponent Payroll component
 * @property string $PayrollComponentCode Payroll component code
 * @property string $PayrollComponentDescription Payroll component description
 * @property int $PayrollComponentType Payroll component type
 * @property string $PayrollComponentTypeDescription Payroll component type description
 * @property string $PayrollRun Payroll run
 * @property string $PayrollRunCode Payroll run code
 * @property int $PayrollYear Payroll year
 * @property int $Period Period
 * @property int $Status Transaction status: 1 - Not entered, 2 - Entered, 3 - Open, 4 - Calculated, 5 - Approved, 6 - Finalized, 7 - Deleted
 * @property int $Type Transaction type
 * @property string $TypeDescription Transaction type description
 */
class PayrollTransactionsByPayrollYear extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'CalculatedAmount',
        'CalculatedBaseValue',
        'CalculatedFranchise',
        'CalculatedMaximum',
        'CalculatedNumber',
        'CostCenter',
        'CostCenterCode',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitCode',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Date',
        'Department',
        'DepartmentCode',
        'DepartmentDescription',
        'Division',
        'Employee',
        'EmployeeHID',
        'Employment',
        'EmploymentConditionGroup',
        'EmploymentConditionGroupCode',
        'EmploymentConditionGroupDescription',
        'EntryAmount',
        'EntryBase',
        'EntryNumber',
        'EntryPercentage',
        'EntryPercentage2',
        'EntryType',
        'EntryTypeDescription',
        'Frequency',
        'FullName',
        'ModifiedDate',
        'Modifier',
        'ModifierFullName',
        'PayrollComponent',
        'PayrollComponentCode',
        'PayrollComponentDescription',
        'PayrollComponentType',
        'PayrollComponentTypeDescription',
        'PayrollRun',
        'PayrollRunCode',
        'PayrollYear',
        'Period',
        'Status',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'beta/{division}/payroll/PayrollTransactionsByPayrollYear';
}

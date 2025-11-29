<?php

namespace Picqer\Financials\Exact;

/**
 * Class VariableMutation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollVariableMutations
 *
 * @property string $ID Primary key
 * @property string $Description Description for the payroll component entry
 * @property int $EmployeeHID Numeric number of Employee
 * @property string $EmployeeID Employee ID
 * @property int $EntryFieldType Entry field types: 1 = Quantity, 2 = Amount, 3 = Percentage
 * @property string $Notes Notes for the payroll component entry
 * @property string $PayrollComponent Payroll component code
 * @property string $PayrollComponentID Payroll component ID
 * @property int $PayrollPeriod Payroll period
 * @property int $PayrollYear Payroll year
 * @property int $Type Type of the entry:1 = Days worked, 2 = Hours worked, 3 = Days ill, 4 = Hours ill, 5 = Days leave, 6 = Hours leave, 7 = Payroll component, 8 = Days care leave, 9 = Hours care leave, 10 = Days extended partner leave, 11 = Hours extended partner leave, 12 = Days Unpaid Leave, 13 = Hours Unpaid Leave, 14 = Days Paid Parental Leave, 15 = Hours Paid Parental Leave
 * @property float $Value Value of the entry
 */
class VariableMutation extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'EmployeeHID',
        'EmployeeID',
        'EntryFieldType',
        'Notes',
        'PayrollComponent',
        'PayrollComponentID',
        'PayrollPeriod',
        'PayrollYear',
        'Type',
        'Value',
    ];

    protected $url = 'payroll/VariableMutations';
}

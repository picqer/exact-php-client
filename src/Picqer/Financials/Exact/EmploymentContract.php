<?php namespace Picqer\Financials\Exact;

/**
 * Class EmploymentContract
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentContracts
 * 
 * @property Guid $ID Primary key
 * @property Int32 $ContractFlexPhase Flexible employment contract phase
 * @property String $ContractFlexPhaseDescription Flexible employment contract phase description.
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $Document Document ID of the employment contract
 * @property Guid $Employee ID of employee
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Numeric ID of the employee
 * @property Int32 $EmployeeType Type of employee. 1 - Employee, 2 - Contractor, 3 - Temporary, 4 - Student, 5 - Flexworker
 * @property String $EmployeeTypeDescription Employee type description
 * @property Guid $Employment Employment ID
 * @property Int32 $EmploymentHID Numeric ID of the employment
 * @property DateTime $EndDate End date of employment contract
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes of employment contract
 * @property DateTime $ProbationEndDate Employment probation end date
 * @property Int32 $ProbationPeriod Employment probation period
 * @property Int32 $ReasonContract Employment contract reason code. 1 - New employment, 2 - Employment change, 3 - New legal employer, 4 - Acquisition 5 - Previous contract expired, 6 - Other
 * @property String $ReasonContractDescription Employment contract reason description
 * @property Int32 $Sequence Sequence number
 * @property DateTime $StartDate Start date of employment contract
 * @property Int32 $Type Type of employment contract. 1 - Definite, 2 - Indefinite, 3 - External
 * @property String $TypeDescription Description of employment contract type
 */
class EmploymentContract extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'ContractFlexPhase',
        'ContractFlexPhaseDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Document',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'EmployeeType',
        'EmployeeTypeDescription',
        'Employment',
        'EmploymentHID',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'ProbationEndDate',
        'ProbationPeriod',
        'ReasonContract',
        'ReasonContractDescription',
        'Sequence',
        'StartDate',
        'Type',
        'TypeDescription'
    ];

    protected $url = 'payroll/EmploymentContracts';

}

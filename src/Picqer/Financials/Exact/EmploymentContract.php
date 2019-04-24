<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentContract.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentContracts
 *
 * @property string $ID Primary key
 * @property int $ContractFlexPhase Flexible employment contract phase
 * @property string $ContractFlexPhaseDescription Flexible employment contract phase description.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Document Document ID of the employment contract
 * @property string $Employee ID of employee
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Numeric ID of the employee
 * @property int $EmployeeType Type of employee. 1 - Employee, 2 - Contractor, 3 - Temporary, 4 - Student, 5 - Flexworker
 * @property string $EmployeeTypeDescription Employee type description
 * @property string $Employment Employment ID
 * @property int $EmploymentHID Numeric ID of the employment
 * @property string $EndDate End date of employment contract
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes of employment contract
 * @property string $ProbationEndDate Employment probation end date
 * @property int $ProbationPeriod Employment probation period
 * @property int $ReasonContract Employment contract reason code. 1 - New employment, 2 - Employment change, 3 - New legal employer, 4 - Acquisition 5 - Previous contract expired, 6 - Other
 * @property string $ReasonContractDescription Employment contract reason description
 * @property int $Sequence Sequence number
 * @property string $StartDate Start date of employment contract
 * @property int $Type Type of employment contract. 1 - Definite, 2 - Indefinite, 3 - External
 * @property string $TypeDescription Description of employment contract type
 */
class EmploymentContract extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'TypeDescription',
    ];

    protected $url = 'payroll/EmploymentContracts';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncEmploymentContract.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncPayrollEmploymentContracts
 *
 * @property int $Timestamp Timestamp
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
 * @property int $EmploymentNumber Employment number
 * @property string $EndDate End date of employment contract
 * @property string $ID Primary key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $ProbationEndDate Employment probation end date
 * @property int $ProbationPeriod Employment probation period
 * @property string $ProbationPeriodDescription Contract probation period description
 * @property int $ReasonContract Employment contract reason code. 1 - New employment, 2 - Employment change, 3 - New legal employer, 4 - Acquisition 5 - Previous contract expired, 6 - Other
 * @property string $ReasonContractDescription Employment contract reason description
 * @property int $Sequence Sequence number
 * @property string $StartDate Start date of employment contract
 * @property int $Type Type of employment contract. 1 - Definite, 2 - Indefinite, 3 - External
 * @property string $TypeDescription Description of employment contract type
 */
class SyncEmploymentContract extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
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
        'EmploymentNumber',
        'EndDate',
        'ID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ProbationEndDate',
        'ProbationPeriod',
        'ProbationPeriodDescription',
        'ReasonContract',
        'ReasonContractDescription',
        'Sequence',
        'StartDate',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'sync/Payroll/EmploymentContracts';
}

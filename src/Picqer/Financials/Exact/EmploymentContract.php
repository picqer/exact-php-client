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
 * @property bool $CreateAutoCorrection Confirmation: Create Auto CorrectionWhen the 'payroll run' already finalized and the update is made to the employment contract start date, the system will first block the PUT action with the message below. With the 'PayrollCorrection' right, the error message below will be thrown:  This change will lead to a recalculation of previous periods. A correction request will be created with the following data:   Activation date: 01-01-2019   Payroll year: 2019   Period: 1  If you are confirmed want to proceed, set the [CreateAutoCorrection] to True and re-submit the request. Without the 'PayrollCorrection' right, the error message below will be thrown:  You do not have rights to change data that can influence processed payroll transactions. Note : If you delete this contract in an already calculated period, auto corrections will be created for this employee.
 * @property string $Created Creation date
 * @property bool $CreatePredecessorsForLinkedAgencies Confirmation: Create Predecessors For Linked AgenciesThe system will block the POST/PUT action when one of the condition below fulfilled: When create (POST) a new successor, the employment contract successor start date is set to an earlier payroll year. When update (PUT) the existing employment contract start date to an earlier payroll year. The error message below will be thrown:  Attention: If you change the start date to an earlier payroll year, predecessors will be created for linked agencies.  You will have to check if the data of the predecessors is correct.  If you are confirmed want to proceed, set the [CreatePredecessorsForLinkedAgencies] to True and re-submit the request.
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
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $ProbationEndDate Employment probation end date
 * @property int $ProbationPeriod Employment probation period
 * @property string $ProbationPeriodDescription Contract probation period description
 * @property int $ReasonContract Employment contract reason code. 1 - New employment, 2 - Employment change, 3 - New legal employer, 4 - Acquisition 5 - Previous contract expired, 6 - Other
 * @property string $ReasonContractDescription Employment contract reason description
 * @property int $Sequence Sequence number
 * @property string $StartDate Start date of employment contractNote : Be aware that for PUT, when you use a start date in the past it will also update years in service to this date.
 * @property int $Type Type of employment contract. 1 - Definite, 2 - Indefinite, 3 - External
 * @property string $TypeDescription Description of employment contract type
 */
class EmploymentContract extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

    protected $fillable = [
        'ID',
        'ContractFlexPhase',
        'ContractFlexPhaseDescription',
        'CreateAutoCorrection',
        'Created',
        'CreatePredecessorsForLinkedAgencies',
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

    protected $url = 'payroll/EmploymentContracts';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class AbsenceRegistration.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMAbsenceRegistrations
 *
 * @property string $ID Primary key
 * @property AbsenceRegistrationTransaction[] $AbsenceRegistrationTransactions Collection of absence registration transactions
 * @property int $Cause Absence cause, only supported for the Netherland legislation
 * @property string $CauseCode Code for the absence cause, only supported for the Netherland legislation
 * @property string $CauseDescription Description for the absence cause, only supported for the Netherland legislation
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee Employee linked to the absence
 * @property string $EmployeeFullName Employee full name
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra information for absence
 */
class AbsenceRegistration extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AbsenceRegistrationTransactions',
        'Cause',
        'CauseCode',
        'CauseDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'hrm/AbsenceRegistrations';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentTaxAuthoritiesGeneral.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentTaxAuthoritiesGeneral
 *
 * @property string $ID Primary key
 * @property string $Account ID of the account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee Employee ID
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Employee number
 * @property string $Employment Employment
 * @property int $EmploymentHID Employment number
 * @property string $EndDate End date of employment agencies
 * @property string $InfluenceInsuranceObligation Influence insurance obligation
 * @property string $InfluenceInsuranceObligationDescription Influence insurance obligation description
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $NatureOfWorkRelationship Nature of work relationship
 * @property string $NatureOfWorkRelationshipDescription Nature of work relationship description
 * @property string $PayrollTaxesNumber Payroll taxes number
 * @property string $StartDate Start date of employment agencies
 * @property string $TypeOfIncome Type of income
 * @property string $TypeOfIncomeDescription Type of income description
 */
class EmploymentTaxAuthoritiesGeneral extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Employment',
        'EmploymentHID',
        'EndDate',
        'InfluenceInsuranceObligation',
        'InfluenceInsuranceObligationDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NatureOfWorkRelationship',
        'NatureOfWorkRelationshipDescription',
        'PayrollTaxesNumber',
        'StartDate',
        'TypeOfIncome',
        'TypeOfIncomeDescription',
    ];

    protected $url = 'payroll/EmploymentTaxAuthoritiesGeneral';
}

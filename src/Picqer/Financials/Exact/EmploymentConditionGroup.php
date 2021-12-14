<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentConditionGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentConditionGroups
 *
 * @property string $ID Primary key
 * @property string $CLACodeTaxOffice CLA code tax office
 * @property string $CLACodeTaxOfficeDescription CLA code tax office description
 * @property string $Code Code
 * @property string $Created Created
 * @property string $Creator Creator
 * @property string $CreatorFullName Creator full name
 * @property string $Description Description
 * @property int $Division Division
 * @property string $EndDate End date
 * @property float $HoursPerWeek Hours per week
 * @property string $Modified Modified
 * @property string $Modifier Modifier
 * @property string $ModifierFullName Modifier full name
 * @property string $SBICode SBI code
 * @property string $SBICodeDescription SBI code description
 * @property string $StartDate Start date
 */
class EmploymentConditionGroup extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'CLACodeTaxOffice',
        'CLACodeTaxOfficeDescription',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EndDate',
        'HoursPerWeek',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'SBICode',
        'SBICodeDescription',
        'StartDate',
    ];

    protected $url = 'beta/{division}/payroll/EmploymentConditionGroups';
}

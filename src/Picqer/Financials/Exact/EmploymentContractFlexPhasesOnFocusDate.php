<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentContractFlexPhasesOnFocusDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadPayrollEmploymentContractFlexPhasesOnFocusDate
 *
 * @property int $Code Code used to declare employment contract flex phase code to the Dutch Tax Authority
 * @property string $Description Flexible employment contract phase description
 * @property string $EndDate End date of the employment contract flex phase
 * @property int $ID Primary key
 * @property string $StartDate Start date of the employment contract flex phase
 */
class EmploymentContractFlexPhasesOnFocusDate extends Model
{
    use Query\Findable;

    protected $fillable = [
        'Code',
        'Description',
        'EndDate',
        'ID',
        'StartDate',
    ];

    protected $url = 'read/payroll/EmploymentContractFlexPhasesOnFocusDate';
}

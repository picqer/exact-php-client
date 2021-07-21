<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentEndReasonsOnFocusDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadPayrollEmploymentEndReasonsOnFocusDate
 *
 * @property string $Code Code used to declare the employment end reason to the Dutch Tax Authority
 * @property string $Description Employment end reason description
 * @property string $EndDate End date of the employment end reason
 * @property int $ID Primary key
 * @property string $StartDate Start date of the employment end reason
 */
class EmploymentEndReasonsOnFocusDate extends Model
{
    use Query\Findable;

    protected $fillable = [
        'Code',
        'Description',
        'EndDate',
        'ID',
        'StartDate',
    ];

    protected $url = 'read/payroll/EmploymentEndReasonsOnFocusDate';
}

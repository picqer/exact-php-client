<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentContractFlexPhase.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentContractFlexPhases
 *
 * @property int $ID Primary key
 * @property string $Description Flexible employment contract phase description
 */
class EmploymentContractFlexPhase extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
    ];

    protected $url = 'payroll/EmploymentContractFlexPhases';
}

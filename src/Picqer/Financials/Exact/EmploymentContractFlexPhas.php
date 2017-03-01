<?php 

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentContractFlexPhas
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentContractFlexPhases
 * 
 * @property Int32 $ID Primary key
 * @property String $Description Flexible employment contract phase description
 */
class EmploymentContractFlexPhas extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description'
    ];

    protected $url = 'payroll/EmploymentContractFlexPhases';

}

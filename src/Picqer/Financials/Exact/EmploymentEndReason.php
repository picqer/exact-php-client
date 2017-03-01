<?php 

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentEndReason
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentEndReasons
 * 
 * @property Int32 $ID Primary key
 * @property String $Description Employment end reason description
 */
class EmploymentEndReason extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description'
    ];

    protected $url = 'payroll/EmploymentEndReasons';

}

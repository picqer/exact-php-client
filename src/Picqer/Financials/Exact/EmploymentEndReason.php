<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentEndReason.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmploymentEndReasons
 *
 * @property int $ID Primary key
 * @property string $Description Employment end reason description
 */
class EmploymentEndReason extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
    ];

    protected $url = 'payroll/EmploymentEndReasons';
}

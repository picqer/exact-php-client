<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentInternalRate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectEmploymentInternalRates
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator Creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee Employee
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Employee number
 * @property string $Employment Employment
 * @property int $EmploymentHID Employment number
 * @property string $EndDate End date
 * @property float $InternalRate Internal rate
 * @property string $Modified Last modified date
 * @property string $Modifier Modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $StartDate Start date
 */
class EmploymentInternalRate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
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
        'InternalRate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'StartDate',
    ];

    protected $url = 'project/EmploymentInternalRates';
}

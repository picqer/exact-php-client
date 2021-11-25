<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmploymentInternalRate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectEmploymentInternalRates
 *
 * @property string $ID ID of internal rate
 * @property string $Created Date and time when the internal rates was created
 * @property string $Creator ID of user that created the internal rate
 * @property string $CreatorFullName Full name of user that created the record
 * @property int $Division Division code
 * @property string $Employee ID of employee that linked to the internal rate
 * @property string $EmployeeFullName Name of employee that linked to the internal rate
 * @property int $EmployeeHID Employee number that linked to the internal rate
 * @property string $Employment ID of employment that linked to the internal rate
 * @property int $EmploymentHID Employement number that linked to the internal rate
 * @property string $EndDate End date of internal rate
 * @property float $InternalRate Amount of internal rate
 * @property string $Modified Last modified date of internal rate
 * @property string $Modifier ID of user that modified the internal rate
 * @property string $ModifierFullName Full name of user that modified the internal rate
 * @property string $StartDate Start date of internal rate
 */
class EmploymentInternalRate extends Model
{
    use Query\Findable;

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

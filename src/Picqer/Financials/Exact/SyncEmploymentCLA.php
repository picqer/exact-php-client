<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncEmploymentCLA.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncPayrollEmploymentCLAs
 *
 * @property int $Timestamp Timestamp
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee Employee ID
 * @property string $EmployeeFullName Employee full name
 * @property int $EmployeeHID Employee number
 * @property string $Employment Employment ID
 * @property int $EmploymentNumber Employment number
 * @property string $EndDate EmploymentCLA end date
 * @property string $ID Primary key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PayrollComponentGroup Employment conditions group ID
 * @property string $PayrollComponentGroupDescription Employment conditions group description
 * @property string $StartDate Employment CLA start date. By default the value of this property will be the first day of next month of previous Employment CLA start date
 */
class SyncEmploymentCLA extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Employment',
        'EmploymentNumber',
        'EndDate',
        'ID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PayrollComponentGroup',
        'PayrollComponentGroupDescription',
        'StartDate',
    ];

    protected $url = 'sync/Payroll/EmploymentCLAs';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeaveBuildUpRegistration
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMLeaveBuildUpRegistrations
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Date Date of leave build up
 * @property string $Description Description of leave build up
 * @property int $Division Division code
 * @property string $Employee Employee linked to the leave build up
 * @property string $EmployeeFullName Employee full name
 * @property int $EmployeeHID Numeric ID of the employee
 * @property float $Hours Total number of leave build up hours
 * @property string $LeaveType Type of leave
 * @property string $LeaveTypeCode Code for type of leave
 * @property string $LeaveTypeDescription Description for type of leave
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra information for leave build up
 * @property int $Status Status of leave build up, 1 = Submitted, 2 = Approved, 3 = Rejected
 */
class LeaveBuildUpRegistration extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Date',
        'Description',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Hours',
        'LeaveType',
        'LeaveTypeCode',
        'LeaveTypeDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Status',
    ];

    protected $url = 'hrm/LeaveBuildUpRegistrations';
}

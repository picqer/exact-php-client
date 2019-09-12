<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectPlanning
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectPlanning
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the project planning
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property int $BGTStatus Status of the project planning process, 1 = To be processed, 2 = Processed, 3 = Failed
 * @property int $CommunicationErrorStatus Status of the external calendar, 0 = No error, 1 = Credentials error, 2 = Technical error, 3 = Both credentials & technical errors, 4 = In progress
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of project planning
 * @property int $Division Division code
 * @property string $Employee Employee linked to the project planning
 * @property string $EmployeeCode Code of employee
 * @property int $EmployeeHID Numeric ID of the employee
 * @property string $EndDate End date of the project planning
 * @property float $Hours Hours of the project planning
 * @property string $HourType The type of hour for the project planning, item with 'Time' type
 * @property string $HourTypeCode Code of the hour type
 * @property string $HourTypeDescription Description of the hour type
 * @property bool $IsBrokenRecurrence Indicates whether the project planning is separated from the recurring planning
 * @property string $Modified Date modified
 * @property string $Modifier Modifier user ID
 * @property string $ModifierFullName Modifier name
 * @property string $Notes For additional information about project planning
 * @property bool $OverAllocate Indicates whether the entries can have over allocated planning hours
 * @property string $Project Project linked to the planning
 * @property string $ProjectCode Code of project
 * @property string $ProjectDescription Description of project
 * @property string $ProjectPlanningRecurring Recurring planning linked to the project planning
 * @property string $ProjectWBS WBS linked to the project planning
 * @property string $ProjectWBSDescription Description of WBS
 * @property string $StartDate Start date of the project planning
 * @property int $Status Status of the project planning, 1 = Reserved, 2 = Planned
 * @property int $Type Type of the project planning, it will always is 4 (employee)
 */
class ProjectPlanning extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'BGTStatus',
        'CommunicationErrorStatus',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Employee',
        'EmployeeCode',
        'EmployeeHID',
        'EndDate',
        'Hours',
        'HourType',
        'HourTypeCode',
        'HourTypeDescription',
        'IsBrokenRecurrence',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OverAllocate',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'ProjectPlanningRecurring',
        'ProjectWBS',
        'ProjectWBSDescription',
        'StartDate',
        'Status',
        'Type',
    ];

    protected $url = 'project/ProjectPlanning';
}

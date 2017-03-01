<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProjectPlanning
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectPlanning
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Account linked to the project planning
 * @property String $AccountCode Code of Account
 * @property String $AccountName Name of Account
 * @property Int16 $BGTStatus Status of the project planning process, 1 = To be processed, 2 = Processed, 3 = Failed
 * @property Int16 $CommunicationErrorStatus Status of the external calendar, 0 = No error, 1 = Credentials error, 2 = Technical error, 3 = Both credentials & technical errors, 4 = In progress
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of project planning
 * @property Int32 $Division Division code
 * @property Guid $Employee Employee linked to the project planning
 * @property String $EmployeeCode Code of employee
 * @property Int32 $EmployeeHID Numeric ID of the employee
 * @property DateTime $EndDate End date of the project planning
 * @property Double $Hours Hours of the project planning
 * @property Guid $HourType The type of hour for the project planning, item with 'Time' type
 * @property String $HourTypeCode Code of the hour type
 * @property String $HourTypeDescription Description of the hour type
 * @property Boolean $IsBrokenRecurrence Indicates whether the project planning is separated from the recurring planning
 * @property DateTime $Modified Date modified
 * @property Guid $Modifier Modifier user ID
 * @property String $ModifierFullName Modifier name
 * @property String $Notes For additional information about project planning
 * @property Boolean $OverAllocate Indicates whether the entries can have over allocated planning hours
 * @property Guid $Project Project linked to the planning
 * @property String $ProjectCode Code of project
 * @property String $ProjectDescription Description of project
 * @property Guid $ProjectPlanningRecurring Recurring planning linked to the project planning
 * @property Guid $ProjectWBS WBS linked to the project planning
 * @property String $ProjectWBSDescription Description of WBS
 * @property DateTime $StartDate Start date of the project planning
 * @property Int16 $Status Status of the project planning, 1 = Reserved, 2 = Planned
 * @property Int16 $Type Type of the project planning, it will always is 4 (employee)
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
        'Type'
    ];

    protected $url = 'ion}/project/ProjectPlanning';

}

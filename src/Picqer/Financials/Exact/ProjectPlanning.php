<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectPlanning.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectPlanning
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the project planning
 * @property string $AccountCode Account code linked to project planning
 * @property string $AccountName Account name linked to project planning
 * @property int $BGTStatus Status of the background task for project planning, 1 = To be processed, 2 = Processed, 3 = Failed
 * @property int $CommunicationErrorStatus Status of the external calender linked to project planning, 0 = No error, 1 = Credentials error, 2 = Technical error, 3 = Both credentials & technical errors, 4 = In progress
 * @property string $Created Date and time the record was created
 * @property string $Creator The GUID ID of the user that created the project planning
 * @property string $CreatorFullName The full name of the user that created the project planning
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description The description of the project planning
 * @property int $Division The code of the company that the record is stored in
 * @property string $Employee The GUID ID of the employee that is linked to the project planning
 * @property string $EmployeeCode The code of the employee that is linked to the project planning
 * @property int $EmployeeHID The numeric ID of the employee that is linked to the project planning
 * @property string $EndDate The end date of the project planning, this is to indicate when the planning ends. E.g: End of a project
 * @property float $Hours Hours planned for the employee
 * @property string $HourType The type of hours entered for the project planning, item with 'Time' type
 * @property string $HourTypeCode The code of the item with 'Time' type that is used in project planning, can be used for searching for hour type
 * @property string $HourTypeDescription The description of the item with 'Time' type that is used in project planning
 * @property bool $IsBrokenRecurrence Indicates whether the project planning is separated from the recurring planning
 * @property string $Modified Date the project planning record was modified
 * @property string $Modifier The ID of the user that modified the project planning records
 * @property string $ModifierFullName The full name of the user that modified the project planning record
 * @property string $Notes Additional information on this project planning record
 * @property bool $OverAllocate Indicates whether the entries can have over allocated planning hours
 * @property string $Project Project ID that is linked to the planning
 * @property string $ProjectCode Project code that is linked to the planning
 * @property string $ProjectDescription Project description that is linked to the planning
 * @property string $ProjectPlanningRecurring Recurring planning linked to project planning
 * @property string $ProjectWBS Referenced project work break down structure ID that is linked to the project planning
 * @property string $ProjectWBSDescription Referenced project work break down structure description that is linked to the project planning
 * @property string $StartDate Start date of the project planning
 * @property int $Status Status of the project planning, 1 = Reserved, 2 = Planned
 * @property int $Type Type of project planning, it will always be 4 for employee
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
        'CustomField',
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

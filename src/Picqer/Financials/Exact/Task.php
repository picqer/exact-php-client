<?php namespace Picqer\Financials\Exact;

/**
 * Class Task
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesTasks
 * 
 * @property Guid $ID The Primary key
 * @property Guid $Account The account that is related to the task
 * @property String $AccountName The name of the account
 * @property DateTime $ActionDate The end date by which the task has to be realized
 * @property RequestAttachments $Attachments Attachments linked to the task
 * @property Guid $Contact The contact person that is related to the task
 * @property String $ContactFullName The name of the contact person
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Guid $CustomTaskType Custom type of the task. If both TaskType and CustomTaskType are specified then TaskType is preferred. This value is write-only.
 * @property String $Description The description of the task
 * @property Int32 $Division The division of the task
 * @property Guid $Document The document that is linked to the task
 * @property String $DocumentSubject The subject of the document
 * @property Int32 $HID The human readable key
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Notes The notes of the task
 * @property Guid $Opportunity The opportunity linked to the task
 * @property String $OpportunityName The name of the opportunity
 * @property Guid $Project The project linked to the task
 * @property String $ProjectDescription The description of the project
 * @property Int32 $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property String $StatusDescription The description of the status
 * @property Int32 $TaskType The type of the task. This value is write-only.0 = Other (default), 1 = Call, 2 = Request for information, 3 = Investigate, 4 = Correspondence, 5 = Create an appointment, 6 = Create a quotation
 * @property String $TaskTypeDescription The description of the type of the task
 * @property Guid $User The user that has to realize the task
 * @property String $UserFullName The user name
 */
class Task extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'ActionDate',
        'Attachments',
        'Contact',
        'ContactFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomTaskType',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'HID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Opportunity',
        'OpportunityName',
        'Project',
        'ProjectDescription',
        'Status',
        'StatusDescription',
        'TaskType',
        'TaskTypeDescription',
        'User',
        'UserFullName'
    ];

    protected $url = 'activities/Tasks';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class Task.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesTasks
 *
 * @property string $ID The Primary key
 * @property string $Account The account that is related to the task
 * @property string $AccountName The name of the account
 * @property string $ActionDate The end date by which the task has to be realized
 * @property requestattachments $Attachments Attachments linked to the task
 * @property string $Contact The contact person that is related to the task
 * @property string $ContactFullName The name of the contact person
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $CustomTaskType Custom type of the task. If both TaskType and CustomTaskType are specified then TaskType is preferred. This value is write-only.
 * @property string $Description The description of the task
 * @property int $Division The division of the task
 * @property string $Document The document that is linked to the task
 * @property string $DocumentSubject The subject of the document
 * @property int $HID The human readable key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes The notes of the task
 * @property string $Opportunity The opportunity linked to the task
 * @property string $OpportunityName The name of the opportunity
 * @property string $Project The project linked to the task
 * @property string $ProjectDescription The description of the project
 * @property int $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property string $StatusDescription The description of the status
 * @property int $TaskType The type of the task. This value is write-only.0 = Other (default), 1 = Call, 2 = Request for information, 3 = Investigate, 4 = Correspondence, 5 = Create an appointment, 6 = Create a quotation
 * @property string $TaskTypeDescription The description of the type of the task
 * @property string $User The user that has to realize the task
 * @property string $UserFullName The user name
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
        'UserFullName',
    ];

    protected $url = 'activities/Tasks';
}

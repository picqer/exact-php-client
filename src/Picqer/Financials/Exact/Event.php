<?php

namespace Picqer\Financials\Exact;

/**
 * Class Event.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesEvents
 *
 * @property string $ID The Primary key
 * @property string $Account The account that is related to the event
 * @property string $AccountName The name of the account
 * @property RequestAttachment[] $Attachments Attachments linked to the event
 * @property string $Campaign The campaign linked to the event
 * @property string $CampaignDescription Description of the campaign
 * @property string $Contact The contact person that is related to the event
 * @property string $ContactFullName The name of the contact person
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description The description
 * @property int $Division The division
 * @property string $Document The document that is linked to the event
 * @property string $DocumentSubject The subject of the document
 * @property string $EndDate The end date and time
 * @property int $HID The human readable key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes The notes of the event
 * @property string $Opportunity The opportunity linked to the event
 * @property string $OpportunityName The name of the opportunity
 * @property string $Project The project linked to the event
 * @property string $ProjectDescription The description of the project
 * @property string $StartDate The start date and time
 * @property int $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property string $StatusDescription The description of the status
 * @property string $User The user that has the event
 * @property string $UserFullName The user name
 */
class Event extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Attachments',
        'Campaign',
        'CampaignDescription',
        'Contact',
        'ContactFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'EndDate',
        'HID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Opportunity',
        'OpportunityName',
        'Project',
        'ProjectDescription',
        'StartDate',
        'Status',
        'StatusDescription',
        'User',
        'UserFullName',
    ];

    protected $url = 'activities/Events';
}

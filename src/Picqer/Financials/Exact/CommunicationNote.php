<?php

namespace Picqer\Financials\Exact;

/**
 * Class CommunicationNote.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesCommunicationNotes
 *
 * @property string $ID The Primary key
 * @property string $Account The account that is related to the communication note
 * @property string $AccountName The name of the account
 * @property requestattachments $Attachments Attachments linked to the communication note
 * @property string $Campaign The campaign linked to the communication note
 * @property string $CampaignDescription Description of the campaign
 * @property string $Contact The contact person that is related to the communication note
 * @property string $ContactFullName The name of the contact person
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Date The date
 * @property int $Division The division
 * @property string $Document The document that is linked to the communication note
 * @property string $DocumentSubject The subject of the document
 * @property int $HID The human readable key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes The notes of the communication note
 * @property string $Opportunity The opportunity linked to the communication note
 * @property string $OpportunityName The name of the opportunity
 * @property int $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property string $StatusDescription The description of the status
 * @property string $Subject A short description of the communication note
 * @property string $User The user that the communication note is assigned to
 * @property string $UserFullName The user name
 */
class CommunicationNote extends Model
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
        'Date',
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
        'Status',
        'StatusDescription',
        'Subject',
        'User',
        'UserFullName',
    ];

    protected $url = 'activities/CommunicationNotes';
}

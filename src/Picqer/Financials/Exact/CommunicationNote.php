<?php namespace Picqer\Financials\Exact;

/**
 * Class CommunicationNote
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesCommunicationNotes
 * 
 * @property Guid $ID The Primary key
 * @property Guid $Account The account that is related to the communication note
 * @property String $AccountName The name of the account
 * @property RequestAttachments $Attachments Attachments linked to the communication note
 * @property Guid $Campaign The campaign linked to the communication note
 * @property String $CampaignDescription Description of the campaign
 * @property Guid $Contact The contact person that is related to the communication note
 * @property String $ContactFullName The name of the contact person
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property DateTime $Date The date
 * @property Int32 $Division The division
 * @property Guid $Document The document that is linked to the communication note
 * @property String $DocumentSubject The subject of the document
 * @property Int32 $HID The human readable key
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Notes The notes of the communication note
 * @property Guid $Opportunity The opportunity linked to the communication note
 * @property String $OpportunityName The name of the opportunity
 * @property Int32 $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property String $StatusDescription The description of the status
 * @property String $Subject A short description of the communication note
 * @property Guid $User The user that the communication note is assigned to
 * @property String $UserFullName The user name
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
        'UserFullName'
    ];

    protected $url = 'activities/CommunicationNotes';

}

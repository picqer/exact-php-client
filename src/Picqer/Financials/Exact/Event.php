<?php 

namespace Picqer\Financials\Exact;

/**
 * Class Event
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesEvents
 * 
 * @property Guid $ID The Primary key
 * @property Guid $Account The account that is related to the event
 * @property String $AccountName The name of the account
 * @property RequestAttachments $Attachments Attachments linked to the event
 * @property Guid $Campaign The campaign linked to the event
 * @property String $CampaignDescription Description of the campaign
 * @property Guid $Contact The contact person that is related to the event
 * @property String $ContactFullName The name of the contact person
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description The description
 * @property Int32 $Division The division
 * @property Guid $Document The document that is linked to the event
 * @property String $DocumentSubject The subject of the document
 * @property DateTime $EndDate The end date and time
 * @property Int32 $HID The human readable key
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Notes The notes of the event
 * @property Guid $Opportunity The opportunity linked to the event
 * @property String $OpportunityName The name of the opportunity
 * @property Guid $Project The project linked to the event
 * @property String $ProjectDescription The description of the project
 * @property DateTime $StartDate The start date and time
 * @property Int32 $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property String $StatusDescription The description of the status
 * @property Guid $User The user that has the event
 * @property String $UserFullName The user name
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
        'UserFullName'
    ];

    protected $url = 'activities/Events';

}

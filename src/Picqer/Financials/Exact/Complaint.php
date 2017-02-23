<?php namespace Picqer\Financials\Exact;

/**
 * Class Complaint
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesComplaints
 * 
 * @property Guid $ID The Primary key
 * @property Guid $Account The account that is related to the complaint
 * @property String $AccountName The name of the account
 * @property Guid $AssignedTo The user that the complaint is assigned to
 * @property String $AssignedToFullName The user name
 * @property RequestAttachments $Attachments Attachments linked to the complaint
 * @property String $Complaint A short description of the complaint
 * @property Guid $Contact The contact person that is related to the complaint
 * @property String $ContactFullName The name of the contact person
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Int32 $Division The division
 * @property Guid $Document The document that is linked to the complaint
 * @property String $DocumentSubject The subject of the document
 * @property Int32 $HID The human readable key
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property DateTime $NextAction The date indicating by when the next action has to be taken
 * @property String $Notes The notes of the complaint
 * @property DateTime $ReceiptDate The date the complaint was received
 * @property Int32 $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property String $StatusDescription The description of the status
 */
class Complaint extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'AssignedTo',
        'AssignedToFullName',
        'Attachments',
        'Complaint',
        'Contact',
        'ContactFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Document',
        'DocumentSubject',
        'HID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NextAction',
        'Notes',
        'ReceiptDate',
        'Status',
        'StatusDescription'
    ];

    protected $url = 'activities/Complaints';

}

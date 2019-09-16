<?php

namespace Picqer\Financials\Exact;

/**
 * Class Complaint.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesComplaints
 *
 * @property string $ID The Primary key
 * @property string $Account The account that is related to the complaint
 * @property string $AccountName The name of the account
 * @property string $AssignedTo The user that the complaint is assigned to
 * @property string $AssignedToFullName The user name
 * @property requestattachments $Attachments Attachments linked to the complaint
 * @property string $Complaint A short description of the complaint
 * @property string $Contact The contact person that is related to the complaint
 * @property string $ContactFullName The name of the contact person
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division The division
 * @property string $Document The document that is linked to the complaint
 * @property string $DocumentSubject The subject of the document
 * @property int $HID The human readable key
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $NextAction The date indicating by when the next action has to be taken
 * @property string $Notes The notes of the complaint
 * @property string $ReceiptDate The date the complaint was received
 * @property int $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property string $StatusDescription The description of the status
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
        'StatusDescription',
    ];

    protected $url = 'activities/Complaints';
}

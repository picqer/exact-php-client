<?php namespace Picqer\Financials\Exact;

/**
 * Class ServiceRequest
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesServiceRequests
 * 
 * @property Guid $ID The Primary key
 * @property Guid $Account The account that is related to the service request
 * @property String $AccountName The name of the account
 * @property Guid $AssignedTo The user that the service request is assigned to
 * @property String $AssignedToFullName The user name
 * @property RequestAttachments $Attachments Attachments linked to the service request
 * @property Guid $Contact The contact person that is related to the service request
 * @property String $ContactFullName The name of the contact person
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description The description
 * @property Int32 $Division The division
 * @property Guid $Document The document that is linked to the service request
 * @property String $DocumentSubject The subject of the document
 * @property Int32 $HID The human readable key
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property DateTime $NextAction The date indicating by when the next action has to be taken
 * @property String $Notes The notes of the service request
 * @property DateTime $ReceiptDate The date the service request was received
 * @property Int32 $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property String $StatusDescription The description of the status
 */
class ServiceRequest extends Model
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
        'Contact',
        'ContactFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
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

    protected $url = 'activities/ServiceRequests';

}

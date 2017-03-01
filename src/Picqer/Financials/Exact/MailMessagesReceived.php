<?php 

namespace Picqer\Financials\Exact;

/**
 * Class MailMessagesReceived
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailMessagesReceived
 * 
 * @property Guid $ID Primary key
 * @property Guid $Bank Bank to/from which the mail message is sent/received. This is used for mail messages of type Bank only. It has an attachment containing the bank file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property String $BankAccount Bank account for which the mail message is sent. This is used for mail messages of type Bank only. It has an attachment containing the bank export file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $ForDivision Administration from which the mail message is sent. This is used for mail messages of type Bank only. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int16 $Operation Specifies the operation upon dealing with the mailmessage (Kirean scan service)
 * @property Guid $OriginalMessage Provides a link to another MailMessage (Kirean scan service)
 * @property String $OriginalMessageSubject Subject of the OriginalMessage
 * @property Guid $PartnerKey The partner key that was used: this refers to the application from which the message is originating. It is filled with a fixed partnerkey when created from within Exact Online
 * @property Double $Quantity Specifies the number of lines of the returned MailMessage attachment (Kirean scan service)
 * @property Guid $RecipientAccount Reference to the account that is receiving this mailmessage
 * @property Byte $RecipientDeleted Indiciates if the recipient deleted this message. If this is the case the recipient can't see it anymore and the sender can actually delete it
 * @property String $RecipientMailbox Mailbox of recipient
 * @property String $RecipientMailboxDescription Mailbox description of recipient
 * @property Guid $RecipientMailboxID Mailbox ID of the recipient. The owner of this mailbox will see the message in the inbox
 * @property Int16 $RecipientStatus Status of the mail message, only the recipient can update this
 * @property String $RecipientStatusDescription Description of RecipientStatus
 * @property Guid $SenderAccount Reference to Account of Sender
 * @property DateTime $SenderDateSent Date the message was sent. Default the date the message is created, can be an earlier date when imported from xml (the date the xml was sent)
 * @property Byte $SenderDeleted Indicates if the sender deleted the message. This means the sender can't see it anymore and the recipient can actually delete it
 * @property String $SenderIPAddress IP address of the sender
 * @property String $SenderMailbox Mailbox of sender
 * @property String $SenderMailboxDescription Description of SenderMailbox
 * @property Guid $SenderMailboxID Mailbox ID of the sender. The owner of this mailbox will see the message in the sent items
 * @property String $Subject Subject of the mail message
 * @property String $SynchronizationCode Provides a link between Exact Online and the banks
 * @property Int32 $Type Type of the mail message
 */
class MailMessagesReceived extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Bank',
        'BankAccount',
        'Created',
        'Creator',
        'CreatorFullName',
        'ForDivision',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Operation',
        'OriginalMessage',
        'OriginalMessageSubject',
        'PartnerKey',
        'Quantity',
        'RecipientAccount',
        'RecipientDeleted',
        'RecipientMailbox',
        'RecipientMailboxDescription',
        'RecipientMailboxID',
        'RecipientStatus',
        'RecipientStatusDescription',
        'SenderAccount',
        'SenderDateSent',
        'SenderDeleted',
        'SenderIPAddress',
        'SenderMailbox',
        'SenderMailboxDescription',
        'SenderMailboxID',
        'Subject',
        'SynchronizationCode',
        'Type'
    ];

    protected $url = 'mailbox/MailMessagesReceived';

}

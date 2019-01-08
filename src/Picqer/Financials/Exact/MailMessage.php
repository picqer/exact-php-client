<?php

namespace Picqer\Financials\Exact;

/**
 * Class MailMessage
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=mailboxMailMessages
 *
 * @property string $ID Primary key
 * @property string $Bank Bank to/from which the mail message is sent/received. This is used for mail messages of type Bank only. It has an attachment containing the bank file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property string $BankAccount Bank account for which the mail message is sent. This is used for mail messages of type Bank only. It has an attachment containing the bank export file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property int $ForDivision Administration from which the mail message is sent. This is used for mail messages of type Bank only. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 * @property int $Operation Specifies the operation upon dealing with the mailmessage (Kirean scan service)
 * @property string $OriginalMessage Provides a link to another MailMessage (Kirean scan service)
 * @property string $PartnerKey The partner key that was used: this refers to the application from which the message is originating. It is filled with a fixed partnerkey when created from within Exact Online
 * @property float $Quantit Specifies the number of lines of the returned MailMessage attachment (Kirean scan service)
 * @property int $RecipientDelete Indiciates if the recipient deleted this message. If this is the case the recipient can't see it anymore and the sender can actually delete it
 * @property string $RecipientMailboxID Mailbox ID of the recipient. The owner of this mailbox will see the message in the inbox
 * @property int $RecipientStatus Status of the mail message, only the recipient can update this
 * @property string $SenderDateSent Date the message was sent. Default the date the message is created, can be an earlier date when imported from xml (the date the xml was sent)
 * @property int $SenderDeleted Indicates if the sender deleted the message. This means the sender can't see it anymore and the recipient can actually delete it
 * @property string $SenderIPAddress IP address of the sender
 * @property string $SenderMailboxID Mailbox ID of the sender. The owner of this mailbox will see the message in the sent items
 * @property string $Subject Subject of the OriginalMessage
 * @property string $SynchronizationCode Provides a link between Exact Online and the banks
 * @property string $Type Bank to/from which the mail message is sent/received. This is used for mail messages of type Bank only. It has an attachment containing the bank file. When used for a mail message of type bank, the value is reserved for internal use and will then be ignored.
 */
class MailMessage extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Bank',
        'BankAccount',
        'ForDivision',
        'Operation',
        'OriginalMessage',
        'PartnerKey',
        'Quantit',
        'RecipientDelete',
        'RecipientMailboxID',
        'RecipientStatus',
        'SenderDateSent',
        'SenderDeleted',
        'SenderIPAddress',
        'SenderMailboxID',
        'Subject',
        'SynchronizationCode',
        'Type',
    ];

    protected $url = 'mailbox/MailMessages';
}

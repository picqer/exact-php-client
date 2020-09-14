<?php

namespace Picqer\Financials\Exact;

/**
 * Class MailMessagesSent.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailMessagesSent
 *
 * @property string $ID The primary key of the mail message.
 * @property string $Bank Bank to/from which the mail message is sent/received. This is only used for mail messages of type 'Bank'. It has an attachment containing the bank file.
 * @property string $BankAccount Bank account for which the mail message is sent. This is only used for mail messages of type 'Bank'. It has an attachment containing the bank export file.
 * @property string $Created The date and time on which the mail message was created.
 * @property string $Creator The user ID of the creator of the mail message.
 * @property string $CreatorFullName The name of the creator of the mail message.
 * @property int $ForDivision Administration from which the mail message is sent. This is only used for mail messages of type 'Bank'.
 * @property string $Modified The date and time the mail message was last modified.
 * @property string $Modifier The ID of the user that last modified the mail message.
 * @property string $ModifierFullName The name of the user that last modified the mail message.
 * @property int $Operation Specifies the operation upon dealing with the mailmessage (Kirean scan service).Operation can have the following values: 1= Purchase invoice without details2= Purchase invoice with details3= Sales invoice4= Bank statement
 * @property string $OriginalMessage Provides a link to another mail message (Kirean scan service).
 * @property string $OriginalMessageSubject The subject of the original message.
 * @property string $PartnerKey The key of the application that created the message. It is filled with a fixed value when created from within Exact Online.
 * @property float $Quantity The number of lines of the returned mail message attachment (Kirean scan service).
 * @property string $RecipientAccount Reference to the account that is receiving this mail message.
 * @property int $RecipientDeleted Indicates whether the recipient deleted this message. If this is the case the recipient can't see it anymore and the sender can actually delete it.
 * @property string $RecipientMailbox The mailbox address of the recipient.
 * @property string $RecipientMailboxDescription The description of the mailbox of the recipient.
 * @property string $RecipientMailboxID The mailbox ID of the recipient. The owner of this mailbox will see the message in the inbox.
 * @property int $RecipientStatus The status of the mail message, only the recipient can update this. RecipientStatus can have the following values: 5= Rejected42= In process10= Draft43= At the scanning service20= Open45= Error during processing25= Prepared46= Blocked30= Approved50= Processed40= Realized
 * @property string $RecipientStatusDescription The description of the recipient status in English.
 * @property string $SenderAccount Reference to the account of the sender.
 * @property string $SenderDateSent Date the message was sent. By default this is the date the message is created. It can be an earlier date when the mail message is imported from xml (the date the xml was sent).
 * @property int $SenderDeleted Indicates whether the sender deleted the message. This means the sender can't see it anymore and the recipient can actually delete it.
 * @property string $SenderIPAddress The IP address of the sender.
 * @property string $SenderMailbox The mailbox address of the sender. The owner of this mailbox will see the message in the sent items.
 * @property string $SenderMailboxDescription The description of the sender mailbox.
 * @property string $SenderMailboxID The mailbox ID of the sender. The owner of this mailbox will see the message in the sent items.
 * @property string $Subject The subject of the mail message.
 * @property string $SynchronizationCode Provides a link between Exact Online and the banks.
 * @property int $Type The mail message type can have the following values: 0= Other5000= Invitation1000= Purchase invoice5010= Invitation accepted1010= Reminder5020= Invitation rejected1020= Quotation6100= Annual statement1030= Sales order6200= Income tax1040= Delivery note6210= Corporate tax1050= Return note6220= VAT Return XBRL1060= Purchase order6221= Supplementary VAT Return XBRL1100= Sales invoice6230= EU Sales list XBRL1200= CRM document6300= Credit report1300= Soda6400= TaxKitDiese2000= Bank7000= Scanned document3000= VAT Return8000= Tax Declaration3001= Postpone submission8010= Payroll tax declaration XBRL4000= EC Sales list8020= Yearly payroll tax declaration XBRL
 */
class MailMessagesSent extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'Type',
    ];

    protected $url = 'mailbox/MailMessagesSent';
}

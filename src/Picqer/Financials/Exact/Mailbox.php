<?php

namespace Picqer\Financials\Exact;

/**
 * Class Mailbox.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailboxes
 *
 * @property string $ID Primary key
 * @property string $Account The account this mailbox belongs to. Can be empty if the owner of the mailbox isn't an Exact Online customer yet
 * @property string $AccountName Name of Account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Extra description of the mailbox
 * @property int $ForDivision Only used when this mailbox is used for one specific administration, for example invoices to this mailbox will only be booked in this administration
 * @property string $ForDivisionDescription Description of ForDivision
 * @property string $Mailbox E-mail address-like format, for example johndoe@exactonline.nl
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $Publish Customers can decide if they want this mailbox to be visible by all. i.e. some other customer can see this in address maintenance for digital postbox of type Exact
 * @property int $Type Type of mailbox. Exact / Government / Manual
 * @property string $ValidFrom Date that this mailbox became valid
 * @property string $ValidTo Date that this mailbox will not be valid anymore
 */
class Mailbox extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'ForDivision',
        'ForDivisionDescription',
        'Mailbox',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Publish',
        'Type',
        'ValidFrom',
        'ValidTo',
    ];

    protected $url = 'mailbox/Mailboxes';
}

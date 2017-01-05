<?php namespace Picqer\Financials\Exact;

/**
 * Class Mailboxe
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailboxes
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account The account this mailbox belongs to. Can be empty if the owner of the mailbox isn't an Exact Online customer yet
 * @property String $AccountName Name of Account
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Extra description of the mailbox
 * @property Int32 $ForDivision Only used when this mailbox is used for one specific administration, for example invoices to this mailbox will only be booked in this administration
 * @property String $ForDivisionDescription Description of ForDivision
 * @property String $Mailbox E-mail address-like format, for example johndoe@exactonline.nl
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Byte $Publish Customers can decide if they want this mailbox to be visible by all. i.e. some other customer can see this in address maintenance for digital postbox of type Exact
 * @property Int16 $Type Type of mailbox. Exact / Government / Manual
 * @property DateTime $ValidFrom Date that this mailbox became valid
 * @property DateTime $ValidTo Date that this mailbox will not be valid anymore
 */
class Mailboxe extends Model
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
        'ValidTo'
    ];

    protected $url = 'mailbox/Mailboxes';

}

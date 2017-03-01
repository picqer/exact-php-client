<?php 

namespace Picqer\Financials\Exact;

/**
 * Class PreferredMailboxForOperation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadMailboxPreferredMailboxForOperation
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $Description Extra description of the mailbox
 * @property Int32 $ForDivision Only used when this mailbox is used for one specific administration, for example invoices to this mailbox will only be booked in this administration
 * @property Boolean $IsScanServiceMailbox Indicates whether this service is used for messages returned by the scanning service
 * @property String $Mailbox E-mail address-like format, for example johndoe@exactonline.nl
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property DateTime $ValidFrom Date that this mailbox became valid
 * @property DateTime $ValidTo Date that this mailbox will not be valid anymore
 */
class PreferredMailboxForOperation extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'operation';

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'Description',
        'ForDivision',
        'IsScanServiceMailbox',
        'Mailbox',
        'Modified',
        'Modifier',
        'ValidFrom',
        'ValidTo'
    ];

    protected $url = 'read/mailbox/PreferredMailboxForOperation';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PreferredMailbox.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadMailboxPreferredMailbox
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $Description Extra description of the mailbox
 * @property int $ForDivision Only used when this mailbox is used for one specific administration, for example invoices to this mailbox will only be booked in this administration
 * @property bool $IsScanServiceMailbox Indicates whether this service is used for messages returned by the scanning service
 * @property string $Mailbox E-mail address-like format, for example johndoe@exactonline.nl
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ValidFrom Date that this mailbox became valid
 * @property string $ValidTo Date that this mailbox will not be valid anymore
 */
class PreferredMailbox extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'ValidTo',
    ];

    protected $url = 'read/mailbox/PreferredMailbox';
}

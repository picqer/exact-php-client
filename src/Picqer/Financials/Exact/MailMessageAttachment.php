<?php

namespace Picqer\Financials\Exact;

/**
 * Class MailMessageAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=mailboxMailMessageAttachments
 *
 * @property string $ID Primary key
 * @property string $Attachment For performance reasons Attachment is Write-Only. The blob can be downloaded using the supplied Url
 * @property string $AttachmentFileName File name of attachment
 * @property string $MailMessageID Reference to Mail message
 * @property int $Type Type of mail message attachment
 */
class MailMessageAttachment extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Attachment',
        'AttachmentFileName',
        'MailMessageID',
        'Type',
    ];

    protected $url = 'mailbox/MailMessageAttachments';
}

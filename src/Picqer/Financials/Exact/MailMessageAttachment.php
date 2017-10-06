<?php

namespace Picqer\Financials\Exact;

/**
 * Class MailMessageAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=mailboxMailMessageAttachments
 *
 * @property Guid $ID Primary key
 * @property Binary $Attachment For performance reasons Attachment is Write-Only. The blob can be downloaded using the supplied Url
 * @property String $AttachmentFileName File name of attachment
 * @property Guid $MailMessageID Reference to Mail message
 * @property Int32 $Type Type of mail message attachment
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

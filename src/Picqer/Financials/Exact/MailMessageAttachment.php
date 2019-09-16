<?php

namespace Picqer\Financials\Exact;

/**
 * Class MailMessageAttachment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailMessageAttachments
 *
 * @property string $ID Primary key
 * @property bool $Attachment For performance reasons Attachment is Write-Only. The blob can be downloaded using the supplied Url
 * @property string $AttachmentFileExtension File extension of attachment
 * @property string $AttachmentFileName File name of attachment
 * @property int $FileSize File size
 * @property string $MailMessageID Reference to Mail message
 * @property string $RecipientAccount Reference to recipient account
 * @property string $SenderAccount Reference to sender account
 * @property int $Type Type of mail message attachment
 * @property string $TypeDescription Description of Type
 * @property string $Url To get the file in its original format (xml, jpg, pdf, etc.) append &Download=1 to the url.
 */
class MailMessageAttachment extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Attachment',
        'AttachmentFileExtension',
        'AttachmentFileName',
        'FileSize',
        'MailMessageID',
        'RecipientAccount',
        'SenderAccount',
        'Type',
        'TypeDescription',
        'Url',
    ];

    protected $url = 'mailbox/MailMessageAttachments';
}

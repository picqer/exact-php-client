<?php namespace Picqer\Financials\Exact;

/**
 * Class MailMessageAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailMessageAttachments
 * 
 * @property Guid $ID Primary key
 * @property Binary $Attachment For performance reasons Attachment is Write-Only. The blob can be downloaded using the supplied Url
 * @property String $AttachmentFileExtension File extension of attachment
 * @property String $AttachmentFileName File name of attachment
 * @property Int64 $FileSize File size
 * @property Guid $MailMessageID Reference to Mail message
 * @property Guid $RecipientAccount Reference to recepient account
 * @property Guid $SenderAccount Reference to sender account
 * @property Int32 $Type Type of mail message attachment
 * @property String $TypeDescription Description of Type
 * @property String $Url The blob can be downloaded through this url
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
        'Url'
    ];

    protected $url = 'mailbox/MailMessageAttachments';

}

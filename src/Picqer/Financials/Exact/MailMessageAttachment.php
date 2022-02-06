<?php

namespace Picqer\Financials\Exact;

/**
 * Class MailMessageAttachment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=MailboxMailMessageAttachments
 *
 * @property string $ID Primary key
 * @property string $Attachment For performance reasons Attachment is Write-Only. The blob can be downloaded using the supplied Url
 * @property string $AttachmentFileExtension File extension of attachment
 * @property string $AttachmentFileName File name of attachment
 * @property int $FileSize File size
 * @property string $MailMessageID Reference to Mail message
 * @property string $RecipientAccount Reference to recipient account
 * @property string $SenderAccount Reference to sender account
 * @property int $Type Type of mail message attachment 0-Unknown 10-PDF 11-XML (ZUGFeRD) 20-UBL 2.0 21-SIB 22-Simplerinvoicing 1.0 23-PEPPOL 24-eFFF 25-Simplerinvoicing 1.1 26-Simplerinvoicing 1.2 30-Finvoice 40-eInvoice 50-XML 60-XBRL 70-Bank import 71-Internal bank statement (TestAutomation) 72-XLSM 73-BankGateway source 80-Bank export 81-Direct debit 82-Mandates 85-Message 86-Status update 90-Statistics 91-Statistics Json 100-TXT 110-Soda 120-OfficialReturnProof 130-UBL 2.1
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

<?php 

namespace Picqer\Financials\Exact;

/**
 * Class DocumentsAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMDocumentsAttachments
 * 
 * @property Guid $ID Primary key
 * @property String $AttachmentFileName Filename of the attachment
 * @property Double $AttachmentFileSize File size of the attachment
 * @property String $AttachmentUrl Url for downloading the attachment
 * @property Boolean $CanShowInWebView 
 */
class DocumentsAttachment extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AttachmentFileName',
        'AttachmentFileSize',
        'AttachmentUrl',
        'CanShowInWebView'
    ];

    protected $url = 'read/crm/DocumentsAttachments';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentsAttachment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMDocumentsAttachments
 *
 * @property string $ID Primary key
 * @property string $AttachmentFileName Filename of the attachment
 * @property float $AttachmentFileSize File size of the attachment
 * @property string $AttachmentUrl Url for downloading the attachment. To get the file in its original format (xml, jpg, pdf, etc.) append &Download=1 to the url.
 * @property bool $CanShowInWebView
 */
class DocumentsAttachment extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AttachmentFileName',
        'AttachmentFileSize',
        'AttachmentUrl',
        'CanShowInWebView',
    ];

    protected $url = 'read/crm/DocumentsAttachments';
}

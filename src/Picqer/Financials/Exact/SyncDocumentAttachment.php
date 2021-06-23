<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncDocumentAttachment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncDocumentsDocumentAttachments
 *
 * @property int64 $Timestamp Timestamp
 * @property binary $Attachment Contains the attachment (Format: Base64 encoded)
 * @property string $Document Reference to the Document
 * @property string $FileName Filename of the attachment
 * @property float $FileSize File size of the attachment
 * @property string $ID Primary key
 * @property string $Url Url of the attachment. To get the file in its original format (xml, jpg, pdf, etc.) append &Download=1 to the url.
 */
class SyncDocumentAttachment extends DocumentAttachment
{
    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Attachment',
        'Document',
        'FileName',
        'FileSize',
        'ID',
        'Url',
    ];

    protected $url = 'sync/Documents/DocumentAttachments';
}

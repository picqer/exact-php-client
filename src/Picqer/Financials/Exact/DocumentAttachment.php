<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocumentAttachments
 *
 * @property string $ID Primary key
 * @property string $Attachment Contains the attachment
 * @property string $Document Reference to the Document
 * @property string $FileName Filename of the attachment
 * @property float $FileSize File size of the attachment
 */
class DocumentAttachment extends Model
{
    use Query\Findable;
    use Persistance\Storable;
    use Persistance\Downloadable;

    protected $fillable = [
        'ID',
        'Attachment',
        'Document',
        'FileName',
        'FileSize',
        'Url',
    ];

    protected $url = 'documents/DocumentAttachments';
}

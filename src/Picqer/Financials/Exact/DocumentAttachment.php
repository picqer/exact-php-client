<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentAttachment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocumentAttachments
 *
 * @property string $ID Primary key
 * @property string $Attachment Contains the attachment
 * @property string $Document Reference to the Document
 * @property string $FileName Filename of the attachment
 * @property float $FileSize File size of the attachment
 * @property string $Url Url of the attachment. To get the file in its original format (xml, jpg, pdf, etc.) append &Download=1 to the url.
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

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->Url . '&Download=1';
    }
}

<?php namespace Picqer\Financials\Exact;

/**
 * Class DocumentAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocumentAttachments
 *
 * @property Guid $ID Primary key
 * @property Binary $Attachment Contains the attachment
 * @property Guid $Document Reference to the Document
 * @property String $FileName Filename of the attachment
 */
class DocumentAttachment extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Attachment',
        'Document',
        'FileName',
        'FileSize',
        'Url'
    ];

    protected $url = 'documents/DocumentAttachments';

}

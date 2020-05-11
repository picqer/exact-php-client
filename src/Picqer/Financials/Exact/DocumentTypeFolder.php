<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentTypeFolder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypeFolders
 *
 * @property string $ID
 * @property string $Created Date created
 * @property string $Creator User id of creator
 * @property int $Division Division code
 * @property string $DocumentFolder Folder to which document type is linked
 * @property int $DocumentType Code of document type which is linked to folder
 * @property string $Modified Date Modified
 * @property string $Modifier User id of modifier
 */
class DocumentTypeFolder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'Division',
        'DocumentFolder',
        'DocumentType',
        'Modified',
        'Modifier',
    ];

    protected $url = 'documents/DocumentTypeFolders';
}

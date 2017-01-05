<?php namespace Picqer\Financials\Exact;

/**
 * Class DocumentTypeFolder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypeFolders
 * 
 * @property Guid $ID 
 * @property DateTime $Created Date created
 * @property Guid $Creator User id of creator
 * @property Int32 $Division Division code
 * @property Guid $DocumentFolder Folder to which document type is linked
 * @property Int32 $DocumentType Code of document type which is linked to folder
 * @property DateTime $Modified Date Modified
 * @property Guid $Modifier User id of modifier
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
        'Modifier'
    ];

    protected $url = 'documents/DocumentTypeFolders';

}

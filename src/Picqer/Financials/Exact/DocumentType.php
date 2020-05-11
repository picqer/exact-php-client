<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypes
 *
 * @property int $ID Primary key
 * @property string $Created Creation date
 * @property string $Description Document type description
 * @property bool $DocumentIsCreatable Indicates if documents of this type can be created
 * @property bool $DocumentIsDeletable Indicates if documents of this type can be deleted
 * @property bool $DocumentIsUpdatable Indicates if documents of this type can be updated
 * @property bool $DocumentIsViewable Indicates if documents of this type can be retrieved
 * @property string $Modified Last modified date
 * @property int $TypeCategory ID of the document type category
 */
class DocumentType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Description',
        'DocumentIsCreatable',
        'DocumentIsDeletable',
        'DocumentIsUpdatable',
        'DocumentIsViewable',
        'Modified',
        'TypeCategory',
    ];

    protected $url = 'documents/DocumentTypes';
}

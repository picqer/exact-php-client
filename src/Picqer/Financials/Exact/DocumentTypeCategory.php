<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentTypeCategory.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypeCategories
 *
 * @property int $ID Primary key
 * @property string $Created Creation date
 * @property string $Description Document category type description
 * @property string $Modified Last modified date
 */
class DocumentTypeCategory extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Description',
        'Modified',
    ];

    protected $url = 'documents/DocumentTypeCategories';
}

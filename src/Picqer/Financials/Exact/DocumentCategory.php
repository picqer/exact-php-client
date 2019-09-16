<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentCategory.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentCategories
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Description Document category description
 * @property string $Modified Last modified date
 */
class DocumentCategory extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Description',
        'Modified',
    ];

    protected $url = 'documents/DocumentCategories';
}

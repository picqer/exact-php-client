<?php 

namespace Picqer\Financials\Exact;

/**
 * Class DocumentTypeCategory
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypeCategories
 * 
 * @property Int32 $ID Primary key
 * @property DateTime $Created Creation date
 * @property String $Description Document category type description
 * @property DateTime $Modified Last modified date
 */
class DocumentTypeCategory extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Description',
        'Modified'
    ];

    protected $url = 'documents/DocumentTypeCategories';

}

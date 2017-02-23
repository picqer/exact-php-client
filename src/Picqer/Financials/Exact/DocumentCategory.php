<?php namespace Picqer\Financials\Exact;

/**
 * Class DocumentCategory
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentCategories
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property String $Description Document category description
 * @property DateTime $Modified Last modified date
 */
class DocumentCategory extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Description',
        'Modified'
    ];

    protected $url = 'documents/DocumentCategories';

}

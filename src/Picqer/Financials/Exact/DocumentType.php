<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentTypes
 *
 * @property String $ID Primary key
 * @property DateTime $Created Creation date
 * @property String $Description Document type description
 * @property Boolean $DocumentIsCreatable Indicates if documents of this type can be created
 * @property bool $DocumentIsDeletable Indicates if documents of this type can be deleted
 * @property bool $DocumentIsUpdatable Indicates if documents of this type can be updated
 * @property Boolean $DocumentIsViewable Indicates if documents of this type can be retrieved
 * @property DateTime $Modified Last modified date
 * @property Int32 $TypeCategory ID of the document type category
 */
class DocumentType extends Model
{
    use Query\Findable;

    protected $fillable = [
      'ID',
    	'Created',
    	'Description',
    	'DocumentIsCreatable',
    	'DocumentIsDeletable',
    	'DocumentIsUpdatable',
    	'DocumentIsViewable',
    	'Modified',
    	'TypeCategory'
    ];

    protected $url = 'documents/DocumentTypes';
}

<?php namespace Picqer\Financials\Exact;

/**
 * Class OpportunityDocument
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMOpportunityDocuments
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account ID of the related account of this document
 * @property Attachments $Attachments Attachments linked to the document
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $DocumentDate Entry date of the incoming document
 * @property Guid $DocumentFolder Id of document folder
 * @property String $DocumentViewUrl Url to view the document
 * @property Boolean $HasEmptyBody Indicates that the document body is empty
 * @property Int32 $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property Guid $Opportunity The opportunity linked to the document
 * @property Int32 $PurchaseInvoiceNumber Purchase invoice number.
 * @property Int32 $PurchaseOrderNumber Purchase order number.
 * @property Int32 $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property Int32 $SalesOrderNumber Number of the sales order
 * @property String $Subject Subject of this document
 * @property Int32 $Type The document type
 * @property String $TypeDescription Translated description of the document type. $filter and $orderby are not supported for this property.
 */
class OpportunityDocument extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'opportunityId';

    protected $fillable = [
        'ID',
        'Account',
        'Attachments',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'DocumentDate',
        'DocumentFolder',
        'DocumentViewUrl',
        'HasEmptyBody',
        'HID',
        'Modified',
        'Modifier',
        'Opportunity',
        'PurchaseInvoiceNumber',
        'PurchaseOrderNumber',
        'SalesInvoiceNumber',
        'SalesOrderNumber',
        'Subject',
        'Type',
        'TypeDescription'
    ];

    protected $url = 'read/crm/OpportunityDocuments';

}

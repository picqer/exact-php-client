<?php

namespace Picqer\Financials\Exact;

/**
 * Class Document
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocuments
 *
 * @property Guid $ID Primary key
 * @property Guid $Account ID of the related account of this document
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $Body Body of this document
 * @property Guid $Category ID of the category of this document
 * @property String $CategoryDescription Description of Category
 * @property Guid $Contact ID of the related contact of this document
 * @property DateTime $Created Creation date
 * @property String $CreatorFullName Name of creator
 * @property Double $Currency Amount in the currency of the transaction
 * @property DateTime $DocumentDate Entry date of the incoming document
 * @property Guid $DocumentFolder The Id of document folder
 * @property Guid $FinancialTransactionEntryID Reference to the financial transaction
 * @property Int32 $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property String $Language The language code of the document
 * @property Guid $Opportunity The opportunity linked to the document
 * @property Int32 $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property Int32 $SalesOrderNumber Number of the sales order
 * @property Int32 $ShopOrderNumber Number of the shop order
 * @property String $Subject Subject of this document
 * @property Int32 $Type ID of the type of this document
 * @property String $TypeDescription Description of Type
 */
class Document extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AmountFC',
        'Body',
        'Category',
        'CategoryDescription',
        'Contact',
        'Created',
        'CreatorFullName',
        'Currency',
        'DocumentDate',
        'DocumentFolder',
        'FinancialTransactionEntryID',
        'HID',
        'Language',
        'Opportunity',
        'SalesInvoiceNumber',
        'SalesOrderNumber',
        'ShopOrderNumber',
        'Subject',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'documents/Documents';
}

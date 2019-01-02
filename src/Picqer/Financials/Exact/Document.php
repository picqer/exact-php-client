<?php

namespace Picqer\Financials\Exact;

/**
 * Class Document
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocuments
 *
 * @property string $ID Primary key
 * @property string $Account ID of the related account of this document
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Body Body of this document
 * @property string $Category ID of the category of this document
 * @property string $CategoryDescription Description of Category
 * @property string $Contact ID of the related contact of this document
 * @property string $Created Creation date
 * @property string $CreatorFullName Name of creator
 * @property float $Currency Amount in the currency of the transaction
 * @property string $DocumentDate Entry date of the incoming document
 * @property string $DocumentFolder The Id of document folder
 * @property string $FinancialTransactionEntryID Reference to the financial transaction
 * @property int $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property string $Language The language code of the document
 * @property string $Opportunity The opportunity linked to the document
 * @property int $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property int $SalesOrderNumber Number of the sales order
 * @property int $ShopOrderNumber Number of the shop order
 * @property string $Subject Subject of this document
 * @property int $Type ID of the type of this document
 * @property string $TypeDescription Description of Type
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

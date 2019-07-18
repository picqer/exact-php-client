<?php

namespace Picqer\Financials\Exact;

/**
 * Class Document.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=documentsDocuments
 *
 * @property string $ID Primary key
 * @property string $Account ID of the related account of this document
 * @property string $AccountCode code of Account
 * @property string $AccountName Name of Account
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Body Body of this document
 * @property string $Category ID of the category of this document
 * @property string $CategoryDescription Description of Category
 * @property string $Contact ID of the related contact of this document
 * @property string $ContactFullName Contact full name
 * @property string $Created Creation date
 * @property string $CreatorFullName Name of creator
 * @property float $Currency Amount in the currency of the transaction
 * @property string $DocumentDate Entry date of the incoming document
 * @property string $DocumentFolder The Id of document folder
 * @property string $DocumentFolderCode The Code of document folder 
 * @property string $DocumentFolderDescription The Description of document folder 
 * @property string $DocumentViewUrl Url to view the document  
 * @property string $FinancialTransactionEntryID Reference to the financial transaction
 * @property boolean $HasEmptyBody Indicates that the document body is empty 
 * @property int $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property string $Language The language code of the document
 * @property string $Modified Last modified date 
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName  Name of modifier
 * @property string $Opportunity The opportunity linked to the document
 * @property string $Project The project linked to the document 
 * @property string $ProjectCode Code of project 
 * @property string $ProjectDescription  Description of project 
 * @property int $SalesInvoiceNumber 'Our reference' of the transaction that belongs to this document
 * @property int $SalesOrderNumber Number of the sales order
 * @property int $SendMethod  Send method 
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
        'AccountCode',
        'AccountName',
        'AmountFC',
        'Body',
        'Category',
        'CategoryDescription',
        'Contact',
        'ContactFullName',
        'Created',
        'CreatorFullName',
        'Currency',
        'Division',
        'DocumentDate',
        'DocumentFolder',
        'DocumentFolderCode',
        'DocumentFolderDecription',
        'DocumentViewUrl',
        'FinancialTransactionEntryID',
        'HasEmptyBody',
        'HID',
        'Language',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Opportunity',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'SalesInvoiceNumber',
        'SalesOrderNumber',
        'ShopOrderNumber',
        'SendMethod',
        'ShopOrderNumber',
        'Subject',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'documents/Documents';
}

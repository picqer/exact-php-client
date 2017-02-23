<?php namespace Picqer\Financials\Exact;

/**
 * Class Document
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocuments
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account ID of the related account of this document
 * @property String $AccountCode Code of Account
 * @property String $AccountName Name of Account
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $Body Body of this document
 * @property Guid $Category ID of the category of this document
 * @property String $CategoryDescription Description of Category
 * @property Guid $Contact ID of the related contact of this document
 * @property String $ContactFullName Contact full name
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency code
 * @property Int32 $Division Division code
 * @property DateTime $DocumentDate Entry date of the incoming document
 * @property Guid $DocumentFolder The Id of document folder
 * @property String $DocumentFolderCode The Code of document folder
 * @property String $DocumentFolderDescription The Decsription of document folder
 * @property String $DocumentViewUrl Url to view the document
 * @property Guid $FinancialTransactionEntryID Reference to the financial transaction
 * @property Boolean $HasEmptyBody Indicates that the document body is empty
 * @property Int32 $HID Human-readable ID, formatted as xx.xxx.xxx. Unique. May not be equal to zero
 * @property String $Language The language code of the document
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $Opportunity The opportunity linked to the document
 * @property Guid $Project The project linked to the document
 * @property String $ProjectCode Code of project
 * @property String $ProjectDescription Description of project
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
        'AccountCode',
        'AccountName',
        'AmountFC',
        'Body',
        'Category',
        'CategoryDescription',
        'Contact',
        'ContactFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Division',
        'DocumentDate',
        'DocumentFolder',
        'DocumentFolderCode',
        'DocumentFolderDescription',
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
        'Subject',
        'Type',
        'TypeDescription'
    ];

    protected $url = 'documents/Documents';

}

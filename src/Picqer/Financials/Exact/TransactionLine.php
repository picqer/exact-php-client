<?php namespace Picqer\Financials\Exact;

/**
 * Class TransactionLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionTransactionLines
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Reference to account
 * @property String $AccountCode Code of the Account
 * @property String $AccountName Name of the Account
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property Double $AmountVATBaseFC Vat base amount in the currency of the transaction
 * @property Double $AmountVATFC Vat amount in the currency of the transaction
 * @property Guid $Asset Reference to asset
 * @property String $AssetCode Code of Asset
 * @property String $AssetDescription Description of Asset
 * @property String $CostCenter Reference to cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property String $CostUnit Reference to cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency
 * @property DateTime $Date Date
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Guid $Document Reference to document
 * @property Int32 $DocumentNumber Number of the document
 * @property String $DocumentSubject Subject of the document
 * @property DateTime $DueDate Date that payment should be done
 * @property Guid $EntryID Reference to header of the entry
 * @property Int32 $EntryNumber Entry number of the header
 * @property Double $ExchangeRate Exchange rate
 * @property Double $ExtraDutyAmountFC Extra duty amount
 * @property Double $ExtraDutyPercentage Extra duty percentage
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property Guid $GLAccount General ledger account
 * @property String $GLAccountCode Code of GLAccount
 * @property String $GLAccountDescription Description of GLAccount
 * @property Int32 $InvoiceNumber Invoice number
 * @property Guid $Item Reference to item
 * @property String $ItemCode Code of Item
 * @property String $ItemDescription Description of Item
 * @property String $JournalCode The journal code
 * @property String $JournalDescription The journal description
 * @property Int32 $LineNumber Line number
 * @property Int16 $LineType Line type
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Extra remarks
 * @property Guid $OffsetID OffsetID
 * @property Int32 $OrderNumber Order number
 * @property Double $PaymentDiscountAmount Discount amount when paid in time
 * @property String $PaymentReference Payment reference
 * @property Guid $Project Reference to project
 * @property String $ProjectCode Code of Project
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity Quantity
 * @property String $SerialNumber Serial number of item
 * @property Guid $Subscription Reference to subscription
 * @property String $SubscriptionDescription Description of Subscription
 * @property String $TrackingNumber Tracking number of item
 * @property String $TrackingNumberDescription Tracking number description
 * @property Int32 $Type 3000 = Budget
 * @property String $VATCode Vat code
 * @property String $VATCodeDescription Description of VATCode
 * @property Double $VATPercentage Vat percentage
 * @property String $VATType Vat type
 * @property String $YourRef Your reference (of customer)
 */
class TransactionLine extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'AmountDC',
        'AmountFC',
        'AmountVATBaseFC',
        'AmountVATFC',
        'Asset',
        'AssetCode',
        'AssetDescription',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Date',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'EntryID',
        'EntryNumber',
        'ExchangeRate',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'FinancialPeriod',
        'FinancialYear',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'InvoiceNumber',
        'Item',
        'ItemCode',
        'ItemDescription',
        'JournalCode',
        'JournalDescription',
        'LineNumber',
        'LineType',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OffsetID',
        'OrderNumber',
        'PaymentDiscountAmount',
        'PaymentReference',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'Quantity',
        'SerialNumber',
        'Subscription',
        'SubscriptionDescription',
        'TrackingNumber',
        'TrackingNumberDescription',
        'Type',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'VATType',
        'YourRef'
    ];

    protected $url = 'financialtransaction/TransactionLines';

}

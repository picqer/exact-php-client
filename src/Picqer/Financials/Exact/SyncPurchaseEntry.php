<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncPurchaseEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncFinancialPurchaseEntries
 *
 * @property int $Timestamp Timestamp
 * @property string $AccountCode Code of the Account
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property float $AmountVATBaseFC Vat base amount in the currency of the transaction
 * @property float $AmountVATFC Vat amount in the currency of the transaction
 * @property string $Asset Reference to asset
 * @property string $AssetCode Code of Asset
 * @property string $AssetDescription Description of Asset
 * @property int $BatchNumber The number of the batch of entries. Normally a batch consists of multiple entries. Batchnumbers are filled for invoices created by: - Fixed entries - Prolongation (only available with module hosting)
 * @property string $CostCenter Reference to cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $CustomField Custom field endpoint
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Document number
 * @property string $DocumentSubject Document subject
 * @property string $DueDate Date when payment should be done
 * @property string $EntryDate Invoice date
 * @property string $EntryID The transaction lines that make up a financial entry share the same EntryID
 * @property int $EntryNumber Entry number
 * @property float $ExchangeRate Exchange rate
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference External link
 * @property float $ExtraDutyAmountFC Extra duty amount
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid to the suppliers G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $ID Primary key
 * @property int $InvoiceNumber Invoice number
 * @property string $Item Reference to item
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $Journal Journal
 * @property string $JournalDescription Description of Journal
 * @property int $LineNumber Indicates the sequence of the lines within one entry
 * @property int $LineType Line type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $OffsetID OffsetID
 * @property int $OrderNumber Order number
 * @property string $PaymentCondition Payment condition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentConditionPaymentMethod Payment method of Payment condition. Values: B = On credit, I = Collection, K = Cash
 * @property float $PaymentDiscountAmount Discount amount when paid in time
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $ProcessNumber Internal processing number, only relevant for Germany
 * @property string $Project Reference to project
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property string $ProjectWBS Reference to Project WBS
 * @property string $ProjectWBSDescription Description of Project WBS
 * @property float $Quantity Quantity
 * @property float $Rate Currency exchange rate
 * @property int $ReportingPeriod The period of the transaction lines. The period should exist in the period date table
 * @property int $ReportingYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property bool $Reversal Indicates that amounts are reversed
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property string $Subscription Reference to subscription line (Note: LineNumber greater than 0 is subscription line)
 * @property string $SubscriptionDescription Description of subscription line
 * @property string $Supplier Reference to supplier (account)
 * @property string $SupplierName Name of supplier
 * @property string $TrackingNumber Tracking number of item
 * @property string $TrackingNumberDescription Tracking number description
 * @property int $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property string $TypeDescription Description of Type
 * @property float $VATAmountDC Vat Amount in the default currency of the company
 * @property float $VATAmountFC Vat Amount in the currency of the transaction
 * @property string $VATCode Vat code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat percentage
 * @property string $VATType Vat type
 * @property string $YourRef Your reference
 */
class SyncPurchaseEntry extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AccountCode',
        'AmountDC',
        'AmountFC',
        'AmountVATBaseFC',
        'AmountVATFC',
        'Asset',
        'AssetCode',
        'AssetDescription',
        'BatchNumber',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomField',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'EntryDate',
        'EntryID',
        'EntryNumber',
        'ExchangeRate',
        'ExternalLinkDescription',
        'ExternalLinkReference',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'FinancialPeriod',
        'FinancialYear',
        'GAccountAmountFC',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'ID',
        'InvoiceNumber',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Journal',
        'JournalDescription',
        'LineNumber',
        'LineType',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OffsetID',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentConditionPaymentMethod',
        'PaymentDiscountAmount',
        'PaymentReference',
        'ProcessNumber',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'ProjectWBS',
        'ProjectWBSDescription',
        'Quantity',
        'Rate',
        'ReportingPeriod',
        'ReportingYear',
        'Reversal',
        'Status',
        'StatusDescription',
        'Subscription',
        'SubscriptionDescription',
        'Supplier',
        'SupplierName',
        'TrackingNumber',
        'TrackingNumberDescription',
        'Type',
        'TypeDescription',
        'VATAmountDC',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'VATType',
        'YourRef',
    ];

    protected $url = 'sync/Financial/PurchaseEntries';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSalesEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncFinancialSalesEntries
 *
 * @property int $Timestamp Timestamp
 * @property string $AccountCode Code of the Account
 * @property float $AmountDC Amount in the default currency of the company. For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property float $AmountFC Amount in the currency of the transaction. For the header this is the sum of all lines, including VAT
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
 * @property string $Currency Currency for the invoice. By default this is the currency of the administration
 * @property string $Customer Reference to customer (account)
 * @property string $CustomerName Name of customer
 * @property string $CustomField Custom field endpoint
 * @property string $Description Description of the entry. Can be different for the sales entry lines
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the invoice
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property string $EntryDate Invoice date
 * @property string $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property int $EntryNumber Entry number, for sales invoices this is the invoice number
 * @property float $ExchangeRate Exchange rate
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference Reference of ExternalLink
 * @property float $ExtraDutyAmountFC Extra duty amount
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid by the customer to your G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $ID Primary key
 * @property int $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property string $InvoiceStatusInformation Detailed information on the status of the sales invoice in case of collaboration with 3rd parties like Peppol
 * @property bool $IsExtraDuty Indicates whether the invoice has extra duty
 * @property string $Item Reference to item
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $Journal The journal code. Every invoice should be linked to a sales journal
 * @property string $JournalDescription Description of Journal
 * @property int $LineNumber Indicates the sequence of the lines within one entry
 * @property int $LineType Line type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $OffsetID OffsetID
 * @property int $OrderNumber Number to indentify the invoice. Order numbers are not unique. Default the number is based on a setting for the first free number
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
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
 * @property float $Rate Foreign currency rate
 * @property int $ReportingPeriod The period of the transaction lines. The period should exist in the period date table
 * @property int $ReportingYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property bool $Reversal Indicates if amounts are reversed
 * @property int $Status Status: 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property string $Subscription Reference to subscription line (Note: LineNumber greater than 0 is subscription line)
 * @property string $SubscriptionDescription Description of subscription line
 * @property string $TrackingNumber Tracking number of item
 * @property string $TrackingNumberDescription Tracking number description
 * @property int $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property string $TypeDescription Description of Type
 * @property float $VATAmountDC Vat amount in the default currency of the company
 * @property float $VATAmountFC Vat amount in the currency of the transaction
 * @property string $VATCode Vat code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat percentage
 * @property string $VATType Vat type
 * @property float $WithholdingTaxAmountDC Withholding tax amount, Spanish legislation only
 * @property float $WithholdingTaxBaseAmount Withholding tax base amount to calculate withholding amount, Spanish legislation only
 * @property float $WithholdingTaxPercentage Withholding tax percentage, Spanish legislation only
 * @property string $YourRef Reference of the customer, like order number
 */
class SyncSalesEntry extends Model
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
        'Customer',
        'CustomerName',
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
        'InvoiceStatusInformation',
        'IsExtraDuty',
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
        'WithholdingTaxAmountDC',
        'WithholdingTaxBaseAmount',
        'WithholdingTaxPercentage',
        'YourRef',
    ];

    protected $url = 'sync/Financial/SalesEntries';
}

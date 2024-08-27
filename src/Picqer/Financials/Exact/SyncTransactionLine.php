<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncTransactionLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncFinancialTransactionLines
 *
 * @property int $Timestamp Timestamp
 * @property string $Account Reference to account
 * @property string $AccountCode Code of the Account
 * @property string $AccountName Name of the Account
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property float $AmountVATBaseFC Vat base amount in the currency of the transaction
 * @property float $AmountVATFC Vat amount in the currency of the transaction
 * @property string $Asset Reference to asset
 * @property string $AssetCode Code of Asset
 * @property string $AssetDescription Description of Asset
 * @property string $CostCenter Reference to cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency
 * @property string $CustomField Custom field endpoint
 * @property string $Date Entry date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate Date that payment should be done
 * @property string $EntryID The transaction lines that make up a financial entry share the same EntryID
 * @property int $EntryNumber Entry number of the header
 * @property float $ExchangeRate Exchange rate
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference External link
 * @property float $ExtraDutyAmountFC Extra duty amount
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $ID Primary key
 * @property int $InvoiceNumber Invoice number
 * @property string $Item Reference to item
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $JournalCode The journal code
 * @property string $JournalDescription The journal description
 * @property int $LineNumber Line number
 * @property int $LineType Line type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $OffsetID OffsetID
 * @property int $OrderNumber Order number
 * @property float $PaymentDiscountAmount Discount amount when paid in time
 * @property string $PaymentReference Payment reference
 * @property string $Project Reference to project
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity
 * @property int $Status 20 = Open, 50 = Processed
 * @property string $Subscription Reference to subscription line
 * @property string $SubscriptionDescription Description of subscription line
 * @property string $TrackingNumber Tracking number of item
 * @property string $TrackingNumberDescription Tracking number description
 * @property int $Type The transaction type.10 = Opening balance141 = Shop order stock reversal20 = Sales entry142 = Issue to parent21 = Sales credit note145 = Shop order time entry30 = Purchase entry146 = Shop order time entry reversal31 = Purchase credit note147 = Shop order by-product receipt40 = Cash flow148 = Shop order by-product reversal50 = VAT return150 = Requirement issue70 = Asset - Depreciation151 = Requirement reversal71 = Asset - Investment152 = Returned from parent72 = Asset - Revaluation155 = Subcontract Issue73 = Asset - Transfer156 = Subcontract reversal74 = Asset - Split158 = Shop order completed75 = Asset - Discontinue162 = Finish assembly76 = Asset - Sales170 = Payroll80 = Revaluation180 = Stock revaluation82 = Exchange rate difference181 = Financial revaluation83 = Payment difference195 = Stock count84 = Deferred revenue290 = Correction entry85 = Tracking number:Revaluation310 = Period closing86 = Deferred cost320 = Year end reflection87 = VAT on prepayment321 = Year end costing90 = Other322 = Year end profits to gross profit95 = Accrued revenue323 = Year end costs to gross profit96 = Accrued costs324 = Year end tax120 = Delivery325 = Year end gross profit to net p/l121 = Sales return326 = Year end net p/l to balance sheet130 = Receipt327 = Year end closing balance131 = Purchase return328 = Year start opening balance140 = Shop order stock receipt3000 = Budget
 * @property string $VATCode Vat code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat percentage
 * @property string $VATType Vat type
 * @property string $YourRef Your reference (of customer)
 */
class SyncTransactionLine extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
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
        'CustomField',
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
        'ExternalLinkDescription',
        'ExternalLinkReference',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'FinancialPeriod',
        'FinancialYear',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'ID',
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
        'Status',
        'Subscription',
        'SubscriptionDescription',
        'TrackingNumber',
        'TrackingNumberDescription',
        'Type',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'VATType',
        'YourRef',
    ];

    protected $url = 'sync/Financial/TransactionLines';
}

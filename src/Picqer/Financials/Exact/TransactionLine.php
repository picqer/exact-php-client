<?php

namespace Picqer\Financials\Exact;

/**
 * Class TransactionLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionTransactionLines
 *
 * @property string $ID Primary key
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
 * @property string $Date Date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate Date that payment should be done
 * @property string $EntryID Reference to header of the entry
 * @property int $EntryNumber Entry number of the header
 * @property float $ExchangeRate Exchange rate
 * @property float $ExtraDutyAmountFC Extra duty amount
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
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
 * @property string $SerialNumber Serial number of item
 * @property int $Status 20 = Open, 50 = Processed
 * @property string $Subscription Reference to subscription
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $TrackingNumber Tracking number of item
 * @property string $TrackingNumberDescription Tracking number description
 * @property int $Type The transaction type.10 = Opening balance142 = Issue to parent20 = Sales entry145 = Shop order time entry21 = Sales credit note146 = Shop order time entry reversal30 = Purchase entry147 = Shop order by-product receipt31 = Purchase credit note148 = Shop order by-product reversal40 = Cash flow150 = Requirement issue50 = VAT return151 = Requirement reversal70 = Asset - Depreciation152 = Returned from parent71 = Asset - Investment155 = Subcontract Issue72 = Asset - Revaluation156 = Subcontract reversal73 = Asset - Transfer158 = Shop order completed74 = Asset - Split162 = Finish assembly75 = Asset - Discontinue170 = Payroll76 = Asset - Sales180 = Stock revaluation80 = Revaluation181 = Financial revaluation82 = Exchange rate difference195 = Stock count83 = Payment difference290 = Correction entry84 = Deferred revenue310 = Period closing85 = Tracking number:Revaluation320 = Year end reflection86 = Deferred cost321 = Year end costing87 = VAT on prepayment322 = Year end profits to gross profit90 = Other323 = Year end costs to gross profit120 = Delivery324 = Year end tax121 = Sales return325 = Year end gross profit to net p/l130 = Receipt326 = Year end net p/l to balance sheet131 = Purchase return327 = Year end closing balance140 = Shop order stock receipt328 = Year start opening balance141 = Shop order stock reversal3000 = Budget
 * @property string $VATCode Vat code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat percentage
 * @property string $VATType Vat type
 * @property string $YourRef Your reference (of customer)
 */
class TransactionLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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

    protected $url = 'financialtransaction/TransactionLines';
}
<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLAccounts
 *
 * @property string $ID Primary Key
 * @property int $AssimilatedVATBox AssimilatedVATBox (France)
 * @property string $BalanceSide The following values are supported: D (Debit) C (Credit)
 * @property string $BalanceType The following values are supported: B (Balance Sheet) W (Profit & Loss)
 * @property int $BelcotaxType Indentify the kind of rewarding for the G/L account. This is used in the official document for the fiscal fiches Belcotax
 * @property string $Code Unique Code of the G/L account
 * @property bool $Compress Indicate if this G/L account should be shown as compressed without the details in the CRW report of G/L history
 * @property string $Costcenter Cost Center linked to the G/L account
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Cost Unit linked to the G/L account
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Name of the G/L account
 * @property int $Division Division code
 * @property int $ExcludeVATListing General ledger transactions on this G/L account should not appear on the VAT listing
 * @property float $ExpenseNonDeductiblePercentage Expenses on this G/L account can not be used to reduce the incomes
 * @property bool $IsBlocked When blocked you can't use this general ledger account anymore for new entries
 * @property bool $Matching Allow entries on this general ledger account to be matched via the G/L account card
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PrivateGLAccount If a private use percentage is defined, you need to specify the G/L account used for the re-invoice of the private use to the owner of the company
 * @property float $PrivatePercentage Specify the percentage of the cost that should be re-invoiced to the owner of the company as private use of the costs
 * @property string $ReportingCode Used in the export of yearly report
 * @property bool $RevalueCurrency Indicates if the amounts booked on this general ledger account will be recalculated when currency revaluation is done
 * @property string $SearchCode Search Code
 * @property int $Type The type of the G/L account. Supported values are:10 = Cash12 = Bank14 = Credit card16 = Payment services20 = Accounts receivable21 = Prepayment accounts receivable22 = Accounts payable24 = VAT25 = Employees payable26 = Prepaid expenses27 = Accrued expenses29 = Income taxes payable30 = Fixed assets32 = Other assets35 = Accumulated depreciation40 = Inventory50 = Capital stock52 = Retained earnings55 = Long term debt60 = Current portion of debt90 = General100 = Tax payable110 = Revenue111 = Cost of goods120 = Other costs121 = Sales, general administrative expenses122 = Depreciation costs123 = Research and development125 = Employee costs126 = Employment costs130 = Exceptional costs140 = Exceptional income150 = Income taxes160 = Interest income300 = Year end reflection301 = Indirect year end costing302 = Direct year end costing
 * @property string $TypeDescription Description of Type
 * @property int $UseCostcenter Indicates if cost centers can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property int $UseCostunit Indicates if cost units can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property string $VATCode VAT Code linked to the G/L account
 * @property string $VATDescription Description of VAT
 * @property string $VATGLAccountType Specify the kind of purchase this G/L account is used for. This is important for the Belgian VAT return to indicate in which VAT box the base amount of purchase should go
 * @property string $VATNonDeductibleGLAccount If you use a percentage of non deductible VAT, you can specify another G/L account that will be used for the non deductible part of the VAT amount. This is used directly in the entry application of purchase invoices.
 * @property float $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non decuctible part. This is used during the entry of purchase invoices
 * @property string $VATSystem The following values are supported: I (Invoice) C (Cash) (France)
 * @property string $YearEndCostGLAccount Indicates the costing account for year end calculations
 * @property string $YearEndReflectionGLAccount Indicates the reflection account that is used by year end application
 */
class GLAccount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AssimilatedVATBox',
        'BalanceSide',
        'BalanceType',
        'BelcotaxType',
        'Code',
        'Compress',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'ExcludeVATListing',
        'ExpenseNonDeductiblePercentage',
        'IsBlocked',
        'Matching',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PrivateGLAccount',
        'PrivatePercentage',
        'ReportingCode',
        'RevalueCurrency',
        'SearchCode',
        'Type',
        'TypeDescription',
        'UseCostcenter',
        'UseCostunit',
        'VATCode',
        'VATDescription',
        'VATGLAccountType',
        'VATNonDeductibleGLAccount',
        'VATNonDeductiblePercentage',
        'VATSystem',
        'YearEndCostGLAccount',
        'YearEndReflectionGLAccount',
    ];

    protected $url = 'financial/GLAccounts';
}

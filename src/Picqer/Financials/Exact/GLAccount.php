<?php 

namespace Picqer\Financials\Exact;

/**
 * Class GLAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLAccounts
 * 
 * @property Guid $ID Primary Key
 * @property Int16 $AssimilatedVATBox AssimilatedVATBox (France)
 * @property String $BalanceSide The following values are supported: D (Debit) C (Credit)
 * @property String $BalanceType The following values are supported: B (Balance Sheet) W (Profit & Loss)
 * @property Int32 $BelcotaxType Indentify the kind of rewarding for the G/L account. This is used in the official document for the fiscal fiches Belcotax
 * @property String $Code Unique Code of the G/L account
 * @property Boolean $Compress Indicate if this G/L account should be shown as compressed without the details in the CRW report of G/L history
 * @property String $Costcenter Cost Center linked to the G/L account
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit Cost Unit linked to the G/L account
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Name of the G/L account
 * @property Int32 $Division Division code
 * @property Byte $ExcludeVATListing General ledger transactions on this G/L account should not appear on the VAT listing
 * @property Double $ExpenseNonDeductiblePercentage Expenses on this G/L account can not be used to reduce the incomes
 * @property Boolean $IsBlocked When blocked you can't use this general ledger account anymore for new entries
 * @property Boolean $Matching Allow entries on this general ledger account to be matched via the G/L account card
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $PrivateGLAccount If a private use percentage is defined, you need to specify the G/L account used for the re-invoice of the private use to the owner of the company
 * @property Double $PrivatePercentage Specify the percentage of the cost that should be re-invoiced to the owner of the company as private use of the costs
 * @property String $ReportingCode Used in the export of yearly report
 * @property Boolean $RevalueCurrency Indicates if the amounts booked on this general ledger account will be recalculated when currency revaluation is done
 * @property String $SearchCode Search Code
 * @property Int32 $Type The type of the G/L account. Supported values are:10 = Cash12 = Bank14 = Credit card16 = Payment services20 = Accounts receivable21 = Prepayment accounts receivable22 = Accounts payable24 = VAT25 = Employees payable26 = Prepaid expenses27 = Accrued expenses29 = Income taxes payable30 = Fixed assets32 = Other assets35 = Accumulated depreciation40 = Inventory50 = Capital stock52 = Retained earnings55 = Long term debt60 = Current portion of debt90 = General100 = Tax payable110 = Revenue111 = Cost of goods120 = Other costs121 = Sales, general administrative expenses122 = Depreciation costs123 = Research and development125 = Employee costs126 = Employment costs130 = Exceptional costs140 = Exceptional income150 = Income taxes160 = Interest income300 = Year end reflection301 = Indirect year end costing302 = Direct year end costing
 * @property String $TypeDescription Description of Type
 * @property Byte $UseCostcenter Indicates if cost centers can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property Byte $UseCostunit Indicates if cost units can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property String $VATCode VAT Code linked to the G/L account
 * @property String $VATDescription Description of VAT
 * @property String $VATGLAccountType Specify the kind of purchase this G/L account is used for. This is important for the Belgian VAT return to indicate in which VAT box the base amount of purchase should go
 * @property Guid $VATNonDeductibleGLAccount If you use a percentage of non deductible VAT, you can specify another G/L account that will be used for the non deductible part of the VAT amount. This is used directly in the entry application of purchase invoices.
 * @property Double $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non decuctible part. This is used during the entry of purchase invoices
 * @property String $VATSystem The following values are supported: I (Invoice) C (Cash) (France)
 * @property Guid $YearEndCostGLAccount Indicates the costing account for year end calculations
 * @property Guid $YearEndReflectionGLAccount Indicates the reflection account that is used by year end application
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
        'YearEndReflectionGLAccount'
    ];

    protected $url = 'financial/GLAccounts';

}

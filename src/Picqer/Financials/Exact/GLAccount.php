<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialGLAccounts
 *
 * @property Guid $ID Primary Key
 * @property Int16 $AssimilatedVATBox AssimilatedVATBox (France)
 * @property String $BalanceSide The following values are supported: D (Debit) C (Credit)
 * @property String $BalanceType The following values are supported: B (Balance Sheet) W (Profit & Loss)
 * @property Int32 $BelcotaxType Indentify the kind of rewarding for the GL account. This is used in the official document for the fiscal fiches Belcotax
 * @property String $Code Unique Code of the G/L Account
 * @property Boolean $Compress Indicate if this GL account should be shown as compressed without the details in the CRW report of GL history
 * @property String $Costcenter Cost Center linked to the G/L Account
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit Cost Unit linked to the G/L Account
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of Costcenter
 * @property Int32 $Division Division code
 * @property Byte $ExcludeVATListing GLTransactions on this GLAccount should not appear on the VAT listing
 * @property Double $ExpenseNonDeductiblePercentage Expenses on this GLAccount can not be used to reduce the incomes
 * @property Boolean $IsBlocked When blocked you can't use this general ledger account anymore for new entries
 * @property Boolean $Matching Allow entries on this general ledger account to be matched via the GL Account card
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $PrivateGLAccount If a private use percentage is defined, you need to specify the GL used for the re-invoice of the private use to the owner of the company
 * @property Double $PrivatePercentage Specify the percentage of the cost that should be re-invoiced to the owner of the company as private use of the costs
 * @property String $ReportingCode Used in the export of yearly report
 * @property Boolean $RevalueCurrency Indicates if the amounts booked on this general ledger account will be recalculated when currency revaluation is done
 * @property String $SearchCode Search Code
 * @property String $Type The following values are supported: B (Balance Sheet) W (Profit & Loss)
 * @property String $TypeDescription Description of Type
 * @property Byte $UseCostcenter Indicates if cost centers can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property Byte $UseCostunit Indicates if cost units can be used when using this general ledger account. The following values are supported: 0 (Optional) 1 (Mandatory) 2 (No)
 * @property String $VATCode VAT Code linked to the G/L Account (for example, 2 or 4)
 * @property String $VATDescription Description of VAT
 * @property String $VATGLAccountType Specify the kind of purchase this GL account is used for. This is important for the Belgian VAT return to indicate in which VAT box the base amount of purchase should go
 * @property Guid $VATNonDeductibleGLAccount If you use a percentage of non deductible VAT, you can specify another GL account that will be used for the non deductible part of the VAT amount. This is used directly in the entry application of purchase invoices.
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
        'YearEndReflectionGLAccount',
    ];

    protected $url = 'financial/GLAccounts';
}

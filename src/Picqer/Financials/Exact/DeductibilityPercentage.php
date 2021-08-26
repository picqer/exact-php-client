<?php

namespace Picqer\Financials\Exact;

/**
 * Class DeductibilityPercentage.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialDeductibilityPercentages
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $EndDate End date of the date range during which this percentage is valid
 * @property float $ExpenseNonDeductiblePercentage Expenses on this G/L account can not be used to reduce the incomes
 * @property string $GLAccount G/L account ID
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $PrivateUsePercentage Specify the percentage of the cost that should be re-invoiced to the owner of the company as private use of the costs
 * @property string $StartDate Start date of the date range during which this percentage is valid
 * @property float $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non deductible part. This is used during the entry of purchase invoices
 */
class DeductibilityPercentage extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EndDate',
        'ExpenseNonDeductiblePercentage',
        'GLAccount',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PrivateUsePercentage',
        'StartDate',
        'VATNonDeductiblePercentage',
    ];

    protected $url = 'financial/DeductibilityPercentages';
}

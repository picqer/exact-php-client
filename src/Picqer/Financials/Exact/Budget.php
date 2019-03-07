<?php

namespace Picqer\Financials\Exact;

/**
 * Class Budget.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BudgetBudgets
 *
 * @property string $ID Primary key
 * @property float $AmountDC Budget amount (always in the default currency of the company)
 * @property string $BudgetScenario Budget scenario
 * @property string $BudgetScenarioCode Code of BudgetScenario
 * @property string $BudgetScenarioDescription Description of BudgetScenario
 * @property string $Costcenter Used for cost center-specific budgets - NULL otherwise
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Used for cost unit-specific budgets - NULL otherwise
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $GLAccount G/L account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $HID Numerical ID. Never displayed to the user, but it may have its use for performance reasons
 * @property string $Item Used for item-specific budgets - NULL otherwise
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $ReportingPeriod Period (combined with financial year)
 * @property int $ReportingYear Financial year
 */
class Budget extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'BudgetScenario',
        'BudgetScenarioCode',
        'BudgetScenarioDescription',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'HID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ReportingPeriod',
        'ReportingYear',
    ];

    protected $url = 'budget/Budgets';
}

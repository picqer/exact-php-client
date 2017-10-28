<?php

namespace Picqer\Financials\Exact;

/**
 * Class Budget
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BudgetBudgets
 *
 * @property Guid $ID Primary key
 * @property Double $AmountDC Budget amount (always in the default currency of the company)
 * @property Guid $BudgetScenario Budget scenario
 * @property String $BudgetScenarioCode Code of BudgetScenario
 * @property String $BudgetScenarioDescription Description of BudgetScenario
 * @property String $Costcenter Used for cost center-specific budgets - NULL otherwise
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit Used for cost unit-specific budgets - NULL otherwise
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $GLAccount G/L account
 * @property String $GLAccountCode Code of GLAccount
 * @property String $GLAccountDescription Description of GLAccount
 * @property Int64 $HID Numerical ID. Never displayed to the user, but it may have its use for performance reasons
 * @property Guid $Item Used for item-specific budgets - NULL otherwise
 * @property String $ItemCode Code of item
 * @property String $ItemDescription Description of item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int16 $ReportingPeriod Period (combined with financial year)
 * @property Int16 $ReportingYear Financial year
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

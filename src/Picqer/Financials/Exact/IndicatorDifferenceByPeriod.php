<?php

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorDifferenceByPeriod.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorDifferenceByPeriods
 *
 * @property string $ID Primary key
 * @property int $AccountType Indicates GL Account types (1 = Revenue, 2 = Cost, 3 = Result)
 * @property int $Active Indicates if this indicator is active or inactive
 * @property int $AfterEntry Indicates whether it will be validated immediately after an entry
 * @property string $BudgetScenario ID of Budget scenario (This property is only used when FinPeriod = 3)
 * @property int $Classification Indicator classification (1 = Quality, 2 = Advice). Default = 1
 * @property int $CompareWith Compare with (1 = Last year, 2 = Last year until period, 3 = Budget)
 * @property string $Created Creation date
 * @property int $CreateSignal Indicates whether a signal is created
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of indicator
 * @property int $Division Division code
 * @property string $ExternalCode External code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $Operator Operator to be used in conjunction with journal (1 = Equal to, 2 = Unequal to, 3 = Greater than, 4 = Greater than or equal to, 5 = Less than, 6 = Less than or equal to, 7 = Between)
 * @property int $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property int $Type Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property float $ValueFrom Value from/Value. Default value is 0. This field should be used together with any choice of operator.
 * @property float $ValueTo Value to. Default value is 0.
 */
class IndicatorDifferenceByPeriod extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AccountType',
        'Active',
        'AfterEntry',
        'BudgetScenario',
        'Classification',
        'CompareWith',
        'Created',
        'CreateSignal',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'ExternalCode',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Operator',
        'Severity',
        'Type',
        'ValueFrom',
        'ValueTo',
    ];

    protected $url = 'beta/{division}/continuousmonitoring/IndicatorDifferenceByPeriods';
}

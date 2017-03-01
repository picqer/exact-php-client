<?php 

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorDifferenceByPeriod
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorDifferenceByPeriods
 * 
 * @property Guid $ID Primary key
 * @property Int16 $AccountType Indicates GL Account types (1 = Revenue, 2 = Cost, 3 = Result)
 * @property Byte $Active Indicates if this indicator is active or inactive
 * @property Byte $AfterEntry Indicates whether is after entry
 * @property Guid $BudgetScenario ID of Budget scenario (This property is only used when FinPeriod = 3)
 * @property Int16 $Classification Indicator classification (1 = Quality, 2 = Advice)
 * @property Int16 $CompareWith Compare with (1 = Last year, 2 = Last year until period, 3 = Budget)
 * @property DateTime $Created Creation date
 * @property Byte $CreateSignal Indicates whether a signal is created
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of indicator
 * @property Int32 $Division Division code
 * @property String $ExternalCode External code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $Operator Operator to be used in conjunction with journal (1 = Equal to, 2 = Unequal to, 3 = Greater than, 4 = Greater than or equal to, 5 = Less than, 6 = Less than or equal to, 7 = Between)
 * @property Int32 $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property Int32 $Type Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property Double $ValueFrom Value from
 * @property Double $ValueTo Value to
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
        'ValueTo'
    ];

    protected $url = 'ion}/continuousmonitoring/IndicatorDifferenceByPeriods';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorState.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorStates
 *
 * @property string $ID Primary key
 * @property int $Count To store the number (e.g. 2) of occurrences of an indicator (e.g. Number of deviating entries: 2)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Indicator ID of Indicators
 * @property string $IndicatorDescription Indicator type description
 * @property int $IndicatorType Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property string $LastUpdated Last update date
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $ReportingYear Financial year
 * @property int $Status Indicator status (1 = OK, 2 = Warning, 3 = Exception)
 * @property float $Value To store a value (e.g. -1234.56) that will be used by the indicators current situation (e.g. Lowest expected balance of liquid assets will be: -1,234.56)
 */
class IndicatorState extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Count',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Indicator',
        'IndicatorDescription',
        'IndicatorType',
        'LastUpdated',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ReportingYear',
        'Status',
        'Value',
    ];

    protected $url = 'beta/{division}/continuousmonitoring/IndicatorStates';
}

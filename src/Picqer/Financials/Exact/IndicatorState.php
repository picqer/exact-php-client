<?php namespace Picqer\Financials\Exact;

/**
 * Class IndicatorState
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorStates
 * 
 * @property Guid $ID Primary key
 * @property Int32 $Count To store the number (e.g. 2) of occurrences of an indicator (e.g. Number of deviating entries: 2)
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $Indicator ID of Indicators
 * @property String $IndicatorDescription Indicator type description
 * @property Int32 $IndicatorType Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property DateTime $LastUpdated Last update date
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $ReportingYear Financial year
 * @property Int32 $Status Indicator status (1 = OK, 2 = Warning, 3 = Exception)
 * @property Double $Value To store a value (e.g. -1234.56) that will be used by the indicators current situation (e.g. Lowest expected balance of liquid assets will be: -1,234.56)
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
        'Value'
    ];

    protected $url = 'ion}/continuousmonitoring/IndicatorStates';

}

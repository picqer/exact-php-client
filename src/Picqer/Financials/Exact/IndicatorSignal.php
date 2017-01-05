<?php namespace Picqer\Financials\Exact;

/**
 * Class IndicatorSignal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorSignals
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Indicator signal description
 * @property Int32 $Division Division code
 * @property Guid $EntryID Primary key
 * @property Guid $GLAccount GL Account ID
 * @property String $GlAccountCode GL Account Code
 * @property String $GlAccountDescription GL Account Description
 * @property Guid $Indicator ID of Indicators
 * @property String $IndicatorDescription Indicator description
 * @property Guid $IndicatorState ID of IndicatorStates
 * @property Int16 $IndicatorStateReportingYear Indicator states reporting year
 * @property Int32 $IndicatorType Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes of indicator signal
 * @property DateTime $NotesModified Notes of indicator signal's modified date
 * @property Guid $NotesModifier Notes of indicator signal's user ID modifier
 * @property String $NotesModifierFullName Name of modifier of notes in indicator signal
 * @property Int32 $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property DateTime $SignalDate Signal's creation date
 * @property Int32 $Status Indicator signal status (0 = Ignore, 1 = Active, 2 = Archived)
 */
class IndicatorSignal extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EntryID',
        'GLAccount',
        'GlAccountCode',
        'GlAccountDescription',
        'Indicator',
        'IndicatorDescription',
        'IndicatorState',
        'IndicatorStateReportingYear',
        'IndicatorType',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'NotesModified',
        'NotesModifier',
        'NotesModifierFullName',
        'Severity',
        'SignalDate',
        'Status'
    ];

    protected $url = 'ion}/continuousmonitoring/IndicatorSignals';

}

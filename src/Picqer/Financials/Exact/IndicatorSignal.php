<?php

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorSignal.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorSignals
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Indicator signal description
 * @property int $Division Division code
 * @property string $EntryID Primary key
 * @property string $GLAccount GL Account ID
 * @property string $GlAccountCode GL Account Code
 * @property string $GlAccountDescription GL Account Description
 * @property string $Indicator ID of Indicators
 * @property string $IndicatorDescription Indicator description
 * @property string $IndicatorState ID of IndicatorStates
 * @property int $IndicatorStateReportingYear Indicator states reporting year
 * @property int $IndicatorType Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes of indicator signal
 * @property string $NotesModified Notes of indicator signal's modified date
 * @property string $NotesModifier Notes of indicator signal's user ID modifier
 * @property string $NotesModifierFullName Name of modifier of notes in indicator signal
 * @property int $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property string $SignalDate Signal's creation date
 * @property int $Status Indicator signal status (0 = Ignore, 1 = Active, 2 = Archived)
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
        'Status',
    ];

    protected $url = 'beta/{division}/continuousmonitoring/IndicatorSignals';
}

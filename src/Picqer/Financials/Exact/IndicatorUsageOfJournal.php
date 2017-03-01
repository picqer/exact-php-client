<?php 

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorUsageOfJournal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorUsageOfJournals
 * 
 * @property Guid $ID Primary key
 * @property Byte $Active Indicates if this indicator is active or inactive
 * @property Int16 $Classification Indicator classification (1 = Quality, 2 = Advice)
 * @property DateTime $Created Creation date
 * @property Byte $CreateSignal Indicates whether a signal is created
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of indicator
 * @property Int32 $Division Division code
 * @property String $ExternalCode External code
 * @property IndicatorGLAccounts $IndicatorGLAccounts Collection of GL accounts
 * @property Guid $Journal ID of journal
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $Operator Operator to be used in conjunction with journal (1 = Equal to, 2 = Unequal to)
 * @property Int32 $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property Int32 $Type Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 */
class IndicatorUsageOfJournal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Active',
        'Classification',
        'Created',
        'CreateSignal',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'ExternalCode',
        'IndicatorGLAccounts',
        'Journal',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Operator',
        'Severity',
        'Type'
    ];

    protected $url = 'ion}/continuousmonitoring/IndicatorUsageOfJournals';

}

<?php namespace Picqer\Financials\Exact;

/**
 * Class IndicatorDeviatingAmountEntered
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorDeviatingAmountEntereds
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
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $Operator Operator to be used in conjunction with journal (1 = Equal to, 2 = Unequal to, 3 = Greater than, 4 = Greater than or equal to, 5 = Less than, 6 = Less than or equal to, 7 = Between)
 * @property Int32 $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property Int32 $Type Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property Double $ValueFrom Value from
 * @property Double $ValueTo Value to
 */
class IndicatorDeviatingAmountEntered extends Model
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
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Operator',
        'Severity',
        'Type',
        'ValueFrom',
        'ValueTo'
    ];

    protected $url = 'ion}/continuousmonitoring/IndicatorDeviatingAmountEntereds';

}

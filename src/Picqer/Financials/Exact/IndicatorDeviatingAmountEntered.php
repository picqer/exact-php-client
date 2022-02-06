<?php

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorDeviatingAmountEntered.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorDeviatingAmountEntereds
 *
 * @property string $ID Primary key
 * @property int $Active Indicates if this indicator is active or inactive
 * @property int $Classification Indicator classification (1 = Quality, 2 = Advice). Default = 1
 * @property string $Created Creation date
 * @property int $CreateSignal Indicates whether a signal is created
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of indicator
 * @property int $Division Division code
 * @property string $ExternalCode External code
 * @property IndicatorGLAccount[] $IndicatorGLAccounts Collection of GL accounts
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $Operator Operator to be used in conjunction with journal (1 = Equal to, 2 = Unequal to, 3 = Greater than, 4 = Greater than or equal to, 5 = Less than, 6 = Less than or equal to, 7 = Between)
 * @property int $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property int $Type Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 * @property float $ValueFrom Value from/Value. Default value is 0. This field should be used together with any choice of operator.
 * @property float $ValueTo Value to. Default value is 0.
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
        'ValueTo',
    ];

    protected $url = 'beta/{division}/continuousmonitoring/IndicatorDeviatingAmountEntereds';
}

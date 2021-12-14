<?php

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorDifferentVatCode.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorDifferentVatCodes
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
 * @property int $Severity Severity of the indicators (1 = Low, 2 = Medium, 3 = High, 4 = Critical)
 * @property int $Type Indicator type (1 = Balance G/L account per financial year, 2 = Usage of journals, 3 = Deviating amount entered, 4 = Liquidity, 5 = VAT Return deadline, 6 = Difference result in percentage, 7 = Different VAT code used)
 */
class IndicatorDifferentVatCode extends Model
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
        'Severity',
        'Type',
    ];

    protected $url = 'beta/{division}/continuousmonitoring/IndicatorDifferentVatCodes';
}

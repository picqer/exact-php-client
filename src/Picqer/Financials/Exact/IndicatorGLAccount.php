<?php

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorGLAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorGLAccounts
 *
 * @property string $ID Primary key
 * @property string $GLAccount ID of GLAccount
 * @property string $GLAccountCode GL account code
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $Indicator ID of Indicators
 */
class IndicatorGLAccount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'Indicator',
    ];

    protected $url = 'beta/{division}/continuousmonitoring/IndicatorGLAccounts';
}

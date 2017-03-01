<?php 

namespace Picqer\Financials\Exact;

/**
 * Class IndicatorGLAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ContinuousMonitoringIndicatorGLAccounts
 * 
 * @property Guid $ID Primary key
 * @property Guid $GLAccount ID of GLAccount
 * @property String $GLAccountCode GL account code
 * @property String $GLAccountDescription Description of GLAccount
 * @property Guid $Indicator ID of Indicators
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
        'Indicator'
    ];

    protected $url = 'ion}/continuousmonitoring/IndicatorGLAccounts';

}

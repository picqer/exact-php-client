<?php 

namespace Picqer\Financials\Exact;

/**
 * Class FinancialPeriod
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialFinancialPeriods
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $EndDate The end date of the period
 * @property Int16 $FinPeriod The financial period. Usually the period is a month or quarter with period 1 starting on the first of January.
 * @property Int16 $FinYear The financial year. The financial year and calendar year are not always aligned.
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property DateTime $StartDate The start date of a period. A start date should always succeed a previous end date. Except for the first year/period combination
 */
class FinancialPeriod extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EndDate',
        'FinPeriod',
        'FinYear',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'StartDate'
    ];

    protected $url = 'financial/FinancialPeriods';

}

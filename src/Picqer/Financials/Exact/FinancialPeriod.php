<?php

namespace Picqer\Financials\Exact;

/**
 * Class FinancialPeriod.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialFinancialPeriods
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $EndDate The end date of the period
 * @property int $FinPeriod The financial period. Usually the period is a month or quarter with period 1 starting on the first of January.
 * @property int $FinYear The financial year. The financial year and calendar year are not always aligned.
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $StartDate The start date of a period. A start date should always succeed a previous end date. Except for the first year/period combination
 */
class FinancialPeriod extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'StartDate',
    ];

    protected $url = 'financial/FinancialPeriods';
}

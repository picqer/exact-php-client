<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReportingBalance
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialReportingBalance
 *
 * @property int $ID Record ID
 * @property float $Amount The sum of the amounts of all transactions in the grouping.
 * @property float $AmountCredit The sum of the amounts of all credit transactions in the grouping.
 * @property float $AmountDebit The sum of the amounts of all debit transactions in the grouping.
 * @property string $BalanceType Balance type of the G/L account: B = Balance Sheet, W = Profit & Loss.
 * @property string $CostCenterCode The code of the cost center.
 * @property string $CostCenterDescription The description of the cost center.
 * @property string $CostUnitCode The code of the cost unit.
 * @property string $CostUnitDescription The description of the cost unit.
 * @property int $Count The number of transactions in the grouping.
 * @property int $Division Division code
 * @property string $GLAccount G/L account
 * @property string $GLAccountCode The code of the G/L account.
 * @property string $GLAccountDescription The description of the G/L account.
 * @property int $ReportingPeriod The reporting period of the transactions in the grouping.
 * @property int $ReportingYear The reporting year of the transactions in the grouping.
 * @property int $Status Status: 20 = Open, 50 = Processed. To get 'after entry' results, both Open and Processed amounts have to be included. This is by default, so it requires no extra filtering.
 * @property int $Type The type of the transactions in the grouping.
 */
class ReportingBalance extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'Amount',
        'AmountCredit',
        'AmountDebit',
        'BalanceType',
        'CostCenterCode',
        'CostCenterDescription',
        'CostUnitCode',
        'CostUnitDescription',
        'Count',
        'Division',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'ReportingPeriod',
        'ReportingYear',
        'Status',
        'Type',
    ];

    protected $url = 'financial/ReportingBalance';
}

<?php namespace Picqer\Financials\Exact;
/**
 * Class ReportingBalance
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialReportingBalance
 *
 * @property Int64 $ID Record ID
 * @property Double $Amount The sum of the amounts of all transactions in the grouping.
 * @property Double $AmountCredit The sum of the amounts of all credit transactions in the grouping.
 * @property Double $AmountDebit The sum of the amounts of all debit transactions in the grouping.
 * @property String $BalanceType Balance type of the G/L account: B = Balance Sheet, W = Profit & Loss.
 * @property String $CostCenterCode The code of the cost center.
 * @property String $CostCenterDescription The description of the cost center.
 * @property String $CostUnitCode The code of the cost unit.
 * @property String $CostUnitDescription The description of the cost unit.
 * @property Int32 $Count The number of transactions in the grouping.
 * @property Int32 $Division Division code
 * @property Guid $GLAccount G/L account
 * @property String $GLAccountCode The code of the G/L account.
 * @property String $GLAccountDescription The description of the G/L account.
 * @property Int32 $ReportingPeriod The reporting period of the transactions in the grouping.
 * @property Int32 $ReportingYear The reporting year of the transactions in the grouping.
 * @property Int32 $Status Status: 20 = Open, 50 = Processed. To get 'after entry' results, both Open and Processed amounts have to be included. This is by default, so it requires no extra filtering.
 * @property Int32 $Type The type of the transactions in the grouping.
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
        'Type'
    ];


    protected $url = 'financial/ReportingBalance';
}

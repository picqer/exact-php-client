<?php namespace Picqer\Financials\Exact;

/**
 * Class CurrentYearAfterEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=OpeningBalanceCurrentYearAfterEntry
 * 
 * @property Int32 $Division Division code.
 * @property Guid $GLAccount The balance sheet account.
 * @property Int32 $ReportingYear The reporting year of the opening balance.
 * @property Double $Amount The opening balance amount of the G/L account.
 * @property String $BalanceSide Indicates whether the G/L account is a debit or credit account. D = Debit, C = Credit.
 * @property String $GLAccountCode The code of the G/L account.
 * @property String $GLAccountDescription The description of the G/L account.
 */
class CurrentYearAfterEntry extends Model
{
    use Query\Findable;

    protected $fillable = [
        'Division',
        'GLAccount',
        'ReportingYear',
        'Amount',
        'BalanceSide',
        'GLAccountCode',
        'GLAccountDescription'
    ];

    protected $url = 'openingbalance/CurrentYear/AfterEntry';

}

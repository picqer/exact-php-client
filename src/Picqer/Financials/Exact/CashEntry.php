<?php

namespace Picqer\Financials\Exact;

/**
 * Class CashEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionCashEntries
 *
 * @property string $EntryID Primary key
 * @property CashEntryLine[] $CashEntryLines Collection of lines
 * @property float $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Currency Currency code
 * @property int $Division Division code
 * @property int $EntryNumber Entry number
 * @property int $FinancialPeriod The period of the transaction lines. The period should exist in the period date table
 * @property int $FinancialYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property int $Status Status: 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 */
class CashEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $cashEntryLines = [];

    protected $fillable = [
        'EntryID',
        'CashEntryLines',
        'ClosingBalanceFC',
        'Created',
        'Currency',
        'Division',
        'EntryNumber',
        'FinancialPeriod',
        'FinancialYear',
        'JournalCode',
        'JournalDescription',
        'Modified',
        'OpeningBalanceFC',
        'Status',
        'StatusDescription',
    ];

    protected $url = 'financialtransaction/CashEntries';

    public function addItem(array $array)
    {
        if (! isset($this->attributes['CashEntryLines']) || $this->attributes['CashEntryLines'] == null) {
            $this->attributes['CashEntryLines'] = [];
        }
        $this->attributes['CashEntryLines'][] = $array;
    }
}

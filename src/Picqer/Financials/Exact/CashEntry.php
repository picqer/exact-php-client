<?php

namespace Picqer\Financials\Exact;

/**
 * Class CashEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialtransactionCashEntries
 *
 * @property string $EntryID Primary key (read-only)
 * @property float $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property string $Created Creation date (read-only)
 * @property float $Currency Closing balance in the currency of the transaction
 * @property int $Division Division code (read-only)
 * @property int $EntryNumber Entry number
 * @property int $FinancialPeriod Fiancial period
 * @property int $FinancialYear Fiancial year
 * @property CashEntryLines $CashEntryLines Collection of lines
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal (read-only)
 * @property string $Modified Last modified date (read-only)
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed (read-only)
 * @property string $StatusDescription Description of Status (read-only)
 */
class CashEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';
    protected $cashEntryLines = [];

    protected $fillable = [
        'EntryID',
        'ClosingBalanceFC',
        'Created',
        'Currency',
        'Division',
        'EntryNumber',
        'FinancialPeriod',
        'FinancialYear',
        'CashEntryLines',
        'JournalCode',
        'JournalDescription',
        'Modified',
        'OpeningBalanceFC',
        'Status',
        'StatusDescription',
    ];

    public function addItem(array $array)
    {
        if (! isset($this->attributes['CashEntryLines']) || $this->attributes['CashEntryLines'] == null) {
            $this->attributes['CashEntryLines'] = [];
        }
        $this->attributes['CashEntryLines'][] = $array;
    }

    protected $url = 'financialtransaction/CashEntries';
}


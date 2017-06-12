<?php namespace Picqer\Financials\Exact;
/**
* Class CashEntry
*
* @package Picqer\Financials\Exact
* @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialtransactionCashEntries
*
 * @property Guid $EntryID Primary key (read-only)
 * @property Double $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property DateTime $Created Creation date (read-only)
 * @property Double $Currency Closing balance in the currency of the transaction
 * @property Int32 $Division Division code (read-only)
 * @property Int32 $EntryNumber Entry number
 * @property Int16 $FinancialPeriod Fiancial period
 * @property Int16 $FinancialYear Fiancial year
 * @property CashEntryLines $CashEntryLines Collection of lines
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal (read-only)
 * @property DateTime $Modified Last modified date (read-only)
 * @property Double $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed (read-only)
 * @property String $StatusDescription Description of Status (read-only)
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
        'StatusDescription'
    ];


    public function addItem(array $array)
    {
        if (!isset($this->attributes['CashEntryLines']) || $this->attributes['CashEntryLines'] == null) {
            $this->attributes['CashEntryLines'] = [];
        }
        $this->attributes['CashEntryLines'][] = $array;
    }


    protected $url = 'financialtransaction/CashEntries';
}


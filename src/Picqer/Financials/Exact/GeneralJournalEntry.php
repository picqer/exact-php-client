<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntries
 *
 * @property Guid $EntryID Primary key
 * @property String $Currency Currency code
 * @property Int32 $EntryNumber Entry number
 * @property Double $ExchangeRate Exchange rate
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property GeneralJournalEntryLines $GeneralJournalEntryLines Collection of lines
 * @property String $JournalCode Code of Journal
 * @property Boolean $Reversal Indicates that amounts are reversed
 */
class GeneralJournalEntry extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $generalJournalEntryLines = [];

    protected $fillable = [
        'EntryID',
        'Currency',
        'EntryNumber',
        'ExchangeRate',
        'FinancialPeriod',
        'FinancialYear',
        'GeneralJournalEntryLines',
        'JournalCode',
        'Reversal',
    ];

    public function addItem(array $array)
    {
        if ( ! isset( $this->attributes['GeneralJournalEntryLines'] ) || $this->attributes['GeneralJournalEntryLines'] == null) {
            $this->attributes['GeneralJournalEntryLines'] = [ ];
        }
        $this->attributes['GeneralJournalEntryLines'][] = $array;
    }

    protected $url = 'generaljournalentry/GeneralJournalEntries';
}

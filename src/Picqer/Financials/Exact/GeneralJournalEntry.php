<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntries
 *
 * @property string $EntryID Primary key
 * @property string $Currency Currency code
 * @property int $EntryNumber Entry number
 * @property float $ExchangeRate Exchange rate
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property GeneralJournalEntryLines $GeneralJournalEntryLines Collection of lines
 * @property string $JournalCode Code of Journal
 * @property bool $Reversal Indicates that amounts are reversed
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

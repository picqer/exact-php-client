<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntries
 *
 * @property string $EntryID Primary key
 * @property string $Created Creation date
 * @property string $Currency Currency code
 * @property int $Division Division code
 * @property int $EntryNumber Entry number
 * @property float $ExchangeRate Exchange rate
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property GeneralJournalEntryLine[] $GeneralJournalEntryLines Collection of lines
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property bool $Reversal Indicates that amounts are reversed
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property int $Type Type: 10 = Opening balance, 90 = Other
 * @property string $TypeDescription Description of Type
 */
class GeneralJournalEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $generalJournalEntryLines = [];
    protected $fillable = [
        'EntryID',
        'Created',
        'Currency',
        'Division',
        'EntryNumber',
        'ExchangeRate',
        'FinancialPeriod',
        'FinancialYear',
        'GeneralJournalEntryLines',
        'JournalCode',
        'JournalDescription',
        'Modified',
        'Reversal',
        'Status',
        'StatusDescription',
        'Type',
        'TypeDescription',
    ];

    public function addItem(array $array)
    {
        if (! isset($this->attributes['GeneralJournalEntryLines']) || $this->attributes['GeneralJournalEntryLines'] == null) {
            $this->attributes['GeneralJournalEntryLines'] = [];
        }
        $this->attributes['GeneralJournalEntryLines'][] = $array;
    }

    protected $url = 'generaljournalentry/GeneralJournalEntries';
}

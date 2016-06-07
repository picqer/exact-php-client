<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntries
 *
 * @property Edm.Guid $EntryId Primary key
 * @property Edm.String $Currency Currency code
 * @property Edm.Int32 $EntryNumber Entry number
 * @property Edm.Double $ExchangeRate Exchange rate
 * @property Edm.Int16 $FinancialPeriod Financial period
 * @property Edm.Int16 $FinancialYear Financial year
 * @property GeneralJournalEntryLines $GeneralJournalEntryLines Collection of lines
 * @property Edm.String $JournalCode Code of Journal
 * @property Edm.Boolean $Reversal Indicates that amounts are reversed
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

    protected $url = 'generaljournalentry/GeneralJournalEntries';
}

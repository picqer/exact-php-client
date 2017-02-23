<?php 

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntries
 * 
 * @property Guid $EntryID Primary key
 * @property DateTime $Created Creation date
 * @property String $Currency Currency code
 * @property Int32 $Division Division code
 * @property Int32 $EntryNumber Entry number
 * @property Double $ExchangeRate Exchange rate
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property GeneralJournalEntryLines $GeneralJournalEntryLines Collection of lines
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Boolean $Reversal Indicates that amounts are reversed
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 * @property Int32 $Type Type: 10 = Opening balance, 90 = Other
 * @property String $TypeDescription Description of Type
 */
class GeneralJournalEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'EntryID';

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
        'TypeDescription'
    ];

    protected $url = 'generaljournalentry/GeneralJournalEntries';

}

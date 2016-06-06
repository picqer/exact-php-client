<?php namespace Picqer\Financials\Exact;

/**
* Class GeneralJournalEntry
*
* @package Picqer\Financials\Exact
* @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=generaljournalentryGeneralJournalEntries
*
 * @property Guid $EntryID Primary key
 * @property-read DateTime $Created Creation date (read-only)
 * @property String $Currency Currency code
 * @property-read Int32 $Division Division code (read-only)
 * @property Int32 $EntryNumber Entry number
 * @property Double $ExchangeRate Exchange rate
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property GeneralJournalEntryLines $GeneralJournalEntryLines Collection of lines
 * @property String $JournalCode Code of Journal
 * @property-read String $JournalDescription Description of Journal (read-only)
 * @property-read DateTime $Modified Last modified date (read-only)
 * @property Boolean $Reversal Indicates that amounts are reversed
 * @property-read Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed (read-only)
 * @property-read String $StatusDescription Description of Status (read-only)
 * @property-read Int32 $Type Type: 10 = Opening balance, 90 = Other (read-only)
 * @property-read String $TypeDescription Description of Type (read-only)
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
		'TypeDescription'
	];


	public function addItem(array $array)
	{
		if (!isset($this->attributes['SalesEntryLines']) || $this->attributes['SalesEntryLines'] == null) {
			$this->attributes['SalesEntryLines'] = [];
		}
		if (!isset($array['LineNumber'])) {
			$array['LineNumber'] = count($this->attributes['SalesEntryLines']) + 1;
		}
		$this->attributes['SalesEntryLines'][] = $array;
	}


	protected $url = 'generaljournalentry/GeneralJournalEntries';
}

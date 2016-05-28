<?php namespace Picqer\Financials\Exact;

/**
* Class CashEntry
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
class CashEntry extends Model
{

	use Query\Findable;
	use Persistance\Storable;

	protected $primaryKey = 'EntryID';
	protected $generalJournalEntryLines = [];

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
		'Reversal',
		'Status',
		'StatusDescription'
	];


	public function addItem(array $array)
	{
		if (!isset($this->attributes['CashEntryLines']) || $this->attributes['CashEntryLines'] == null) {
			$this->attributes['CashEntryLines'] = [];
		}
		if (!isset($array['LineNumber'])) {
			$array['LineNumber'] = count($this->attributes['CashEntryLines']) + 1;
		}
		$this->attributes['CashEntryLines'][] = $array;
	}


	protected $url = 'financialtransaction/CashEntries';
}

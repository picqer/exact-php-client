<?php namespace Picqer\Financials\Exact;

/**
 * Class CashEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionCashEntries
 * 
 * @property Guid $EntryID Primary key
 * @property CashEntryLines $CashEntryLines Collection of lines
 * @property Double $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property DateTime $Created Creation date
 * @property String $Currency Currency code
 * @property Int32 $Division Division code
 * @property Int32 $EntryNumber Entry number
 * @property Int16 $FinancialPeriod Fiancial period
 * @property Int16 $FinancialYear Fiancial year
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Double $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 */
class CashEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'EntryID';

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
        'StatusDescription'
    ];

    protected $url = 'financialtransaction/CashEntries';

}

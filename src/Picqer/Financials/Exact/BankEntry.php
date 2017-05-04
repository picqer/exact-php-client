<?php namespace Picqer\Financials\Exact;

/**
 * Class BankEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionBankEntries
 * @property Edm.Guid $EntryId Primary key
 * @property BankEntryLines $BankEntryLines collection of lines
 * @property Edm.Double $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property Edm.String $Currency Currency Code
 * @property Edm.Int32 $FinancialPeriod Financial period
 * @property Edm.Int32 $FinancialYear Financial year
 * @property Edm.String $JournalCode Code of Journal
 * @property Edm.Int32 $Status Status
*/
class BankEntry extends Model
{

    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'EntryID';

    protected $bankEntryLines = [];
    
    protected $fillable = [
        'EntryID',
        'BankEntryLines',
        'ClosingBalanceFC',
        'Currency',
        'FinancialPeriod',
        'FinancialYear',
        'JournalCode',
        'OpeningBalanceFC',
        'Status'
    ];

    protected $url = 'financialtransaction/BankEntries';

}

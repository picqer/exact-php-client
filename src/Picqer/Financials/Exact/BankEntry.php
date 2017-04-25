<?php

namespace Picqer\Financials\Exact;

/**
 * Class BankEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionBankEntries
 *
 * @property Guid $EntryID Primary key
 * @property BankEntryLines $BankEntryLines Collection of lines
 * @property Guid $BankStatementDocument Reference to document with bank statement
 * @property Int32 $BankStatementDocumentNumber Document number of document with bank statement
 * @property String $BankStatementDocumentSubject Subject of document with bank statement
 * @property Double $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property DateTime $Created Creation date
 * @property String $Currency Currency code
 * @property Int32 $Division Division code
 * @property Int32 $EntryNumber Entry number
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Double $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 */
class BankEntry extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $bankEntryLines = [ ];

    protected $fillable = [
        'EntryID',
        'BankEntryLines',
        'BankStatementDocument',
        'BankStatementDocumentNumber',
        'BankStatementDocumentSubject',
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
        'StatusDescription',
    ];

    public function addItem(array $array)
    {
        if ( ! isset( $this->attributes['BankEntryLines'] ) || $this->attributes['BankEntryLines'] == null) {
            $this->attributes['BankEntryLines'] = [ ];
        }
        $this->attributes['BankEntryLines'][] = $array;
    }

    protected $url = 'financialtransaction/BankEntries';

}
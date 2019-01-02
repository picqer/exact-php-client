<?php

namespace Picqer\Financials\Exact;

/**
 * Class BankEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionBankEntries
 *
 * @property string $EntryID Primary key
 * @property BankEntryLines $BankEntryLines Collection of lines
 * @property string $BankStatementDocument Reference to document with bank statement
 * @property int $BankStatementDocumentNumber Document number of document with bank statement
 * @property string $BankStatementDocumentSubject Subject of document with bank statement
 * @property float $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Currency Currency code
 * @property int $Division Division code
 * @property int $EntryNumber Entry number
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
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
        if (! isset($this->attributes['BankEntryLines']) || $this->attributes['BankEntryLines'] == null) {
            $this->attributes['BankEntryLines'] = [];
        }
        $this->attributes['BankEntryLines'][] = $array;
    }

    protected $url = 'financialtransaction/BankEntries';
}
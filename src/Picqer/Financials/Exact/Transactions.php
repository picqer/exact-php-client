<?php namespace Picqer\Financials\Exact;

class Transactions extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ClosingBalanceFC',
        'Date',
        'Description',
        'Division',
        'EntryNumber',
        'FinancialPeriod',
        'FinancialYear',
        'JournalCode',
        'JournalDescription',
        'OpeningBalanceFC',
        'PaymentConditionCode',
        'PaymentConditionDescription',
        'Status',
        'StatusDescription',
        'TransactionLines',
        'Type',
        'TypeDescription'
    ];

    protected $url = 'financialtransaction/Transactions';
}

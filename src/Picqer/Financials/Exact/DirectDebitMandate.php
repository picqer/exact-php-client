<?php namespace Picqer\Financials\Exact;

class DirectDebitMandate extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'BankAccount',
        'CancellationDate',
        'Description',
        'Division',
        'FirstSend',
        'PaymentType',
        'Reference',
        'SignatureDate',
        'Type'
    ];

    protected $url = 'cashflow/DirectDebitMandates';

}


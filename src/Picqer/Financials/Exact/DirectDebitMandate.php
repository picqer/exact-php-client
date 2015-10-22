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
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'FirstSend',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentType',
        'Reference',
        'SignatureDate',
        'Type'
    ];

    protected $url = 'cashflow/DirectDebitMandates';

}


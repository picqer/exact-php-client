<?php namespace Picqer\Financials\Exact;

class BankAccount extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Bank',
        'BankAccount',
        'BankAccountHolderName',
        'BankDescription',
        'BankName',
        'BICCode',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Format',
        'IBAN',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Type',
        'TypeDescription'        
    ];

    protected $url = 'crm/BankAccounts';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class BankAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmBankAccounts
 *
 * @property string $ID Primary key
 * @property string $Account Account (customer, supplier) to which the bank account belongs
 * @property string $AccountName The name of the account
 * @property string $Bank Account (customer, supplier) to which the bank account belongs
 * @property string $BankAccount The bank account number
 * @property string $BankAccountHolderName Name of the holder of the bank account, as known by the bank
 * @property string $BankDescription Obsolete
 * @property string $BankName Obsolete
 * @property string $BICCode BIC code of the bank where the bank account is held
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Obsolete
 * @property int $Division Division code
 * @property string $Format Format that belongs to the bank account number
 * @property string $IBAN Obsolete
 * @property bool $Main Indicates if the bank account is the main bank account
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Type The type indicates what entity the bank account is used for. A = Account (default), E = Employee, K = Cash, R = Bank, S = Student, U = Unknown. Currently it's only possible to create 'Account' type bank accounts.
 * @property string $TypeDescription Description of the Type
 */
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
        'TypeDescription',
    ];

    protected $url = 'crm/BankAccounts';
}

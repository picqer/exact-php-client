<?php

namespace Picqer\Financials\Exact;

/**
 * Class BankAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMBankAccounts
 *
 * @property string $ID Primary key
 * @property string $Account Account (customer, supplier) to which the bank account belongs
 * @property string $AccountName The name of the account
 * @property string $BankAccount The bank account number
 * @property string $BankAccountHolderName Name of the holder of the bank account, as known by the bank
 * @property string $BICCode BIC code of the bank where the bank account is held
 * @property bool $Blocked Indicates if the bank account is blocked
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the bank account
 * @property int $Division Division code
 * @property string $Format Format that belongs to the bank account number
 * @property bool $Main Indicates if the bank account is the main bank account
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PaymentServiceAccount ID of the Payment service account. Used when Type is 'P' (Payment service)
 * @property string $Type The type indicates what entity the bank account is used for. A = Account (default), E = Employee, K = Cash, P = Payment service, R = Bank, S = Student, U = Unknown. Currently it's only possible to create 'Account' type bank accounts.
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
        'BankAccount',
        'BankAccountHolderName',
        'BICCode',
        'Blocked',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Format',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentServiceAccount',
        'Type',
        'TypeDescription',
    ];

    protected $url = 'crm/BankAccounts';
}

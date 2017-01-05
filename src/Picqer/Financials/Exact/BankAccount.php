<?php namespace Picqer\Financials\Exact;

/**
 * Class BankAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMBankAccounts
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Account (customer, supplier) to which the bank account belongs
 * @property String $AccountName The name of the account
 * @property String $BankAccount The bank account number
 * @property String $BankAccountHolderName Name of the holder of the bank account, as known by the bank
 * @property String $BICCode BIC code of the bank where the bank account is held
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the bank account
 * @property Int32 $Division Division code
 * @property String $Format Format that belongs to the bank account number
 * @property Boolean $Main Indicates if the bank account is the main bank account
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $PaymentServiceAccount ID of the Payment service account. Used when Type is 'P' (Payment service)
 * @property String $Type The type indicates what entity the bank account is used for. A = Account (default), E = Employee, K = Cash, P = Payment service, R = Bank, S = Student, U = Unknown. Currently it's only possible to create 'Account' type bank accounts.
 * @property String $TypeDescription Description of the Type
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
        'TypeDescription'
    ];

    protected $url = 'crm/BankAccounts';

}

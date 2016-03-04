<?php namespace Picqer\Financials\Exact;

/**
 * Class BankAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmBankAccounts
 *
 * @property Guid $ID Primary key
 * @property Guid $Account Account (customer, supplier) to which the bank account belongs
 * @property String $AccountName The name of the account
 * @property Guid $Bank Account (customer, supplier) to which the bank account belongs
 * @property String $BankAccount The bank account number
 * @property String $BankAccountHolderName Name of the holder of the bank account, as known by the bank
 * @property String $BankDescription Obsolete
 * @property String $BankName Obsolete
 * @property String $BICCode BIC code of the bank where the bank account is held
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Obsolete
 * @property Int32 $Division Division code
 * @property String $Format Format that belongs to the bank account number
 * @property String $IBAN Obsolete
 * @property Boolean $Main Indicates if the bank account is the main bank account
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Type The type indicates what entity the bank account is used for. A = Account (default), E = Employee, K = Cash, R = Bank, S = Student, U = Unknown. Currently it's only possible to create 'Account' type bank accounts.
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

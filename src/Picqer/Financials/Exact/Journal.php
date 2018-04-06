<?php

namespace Picqer\Financials\Exact;

/**
 * Class Journal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialJournals
 *
 * @property Guid $ID Primary Key
 * @property Boolean $AllowVariableCurrency Indicates if the journal allows variable currency
 * @property Boolean $AllowVariableExchangeRate Indicates if the journal allows the exchange rate of the currency of the amounts in the journal entry to be changed
 * @property Boolean $AllowVAT Indicates if the journal allows the use of VAT in the financial entry. Especially true for general journals
 * @property Boolean $AutoSave Indicates if the journal automatically saves the entries when the amount is in balance with the entry lines
 * @property Guid $Bank Reference to bank account
 * @property String $BankAccountBICCode BIC code of the bank where the bank account is held
 * @property String $BankAccountCountry Country of bank account
 * @property String $BankAccountDescription Description of BankAccount
 * @property String $BankAccountIBAN IBAN of the bank account
 * @property Guid $BankAccountID Reference to the Bank Account linked to the Journal
 * @property String $BankAccountIncludingMask Bank account number. Is mandatory for Journals that have Type = Bank
 * @property Boolean $BankAccountUseSEPA Obsolete. Whether or not use SEPA for the bank account
 * @property Boolean $BankAccountUseSepaDirectDebit Obsolete. Whether or not use SEPA direct debit for the bank account
 * @property String $BankName Name of bank account
 * @property String $Code Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Default Currency of the Journal. If AllowVariableCurrency is false this is the only currency that can be used
 * @property String $CurrencyDescription Description of Currency
 * @property String $Description Name of the Journal
 * @property Int32 $Division Division code
 * @property Guid $GLAccount Suspense general ledger account
 * @property String $GLAccountCode Code of GLAccount
 * @property String $GLAccountDescription Description of GLAccount
 * @property Int32 $GLAccountType Type of GLAccount
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $PaymentInTransitAccount General ledger account for payment in transit
 * @property String $PaymentServiceAccountIdentifier Identifier detail of the Payment service account. Ex. EmailID for Paypal type of Payment service account
 * @property Int32 $PaymentServiceProvider Type of Payment service provider. The following values are supported: 1 (Adyen), 2 (Paypal), 3 (Stripe). Is mandatory for Journals of Type 16 (Payment service)
 * @property String $PaymentServiceProviderName Name of the Payment service provider
 * @property Int32 $Type Type of Journal. The following values are supported: 10 (Cash) 12 (Bank) 16 (Payment service) 20 (Sales) 21 (Return invoice) 22 (Purchase) 23 (Received return invoice) 90 (General journal)
 */
class Journal extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AllowVariableCurrency',
        'AllowVariableExchangeRate',
        'AllowVAT',
        'AutoSave',
        'Bank',
        'BankAccountBICCode',
        'BankAccountCountry',
        'BankAccountDescription',
        'BankAccountIBAN',
        'BankAccountID',
        'BankAccountIncludingMask',
        'BankAccountUseSEPA',
        'BankAccountUseSepaDirectDebit',
        'BankName',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CurrencyDescription',
        'Description',
        'Division',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'GLAccountType',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentInTransitAccount',
        'PaymentServiceAccountIdentifier',
        'PaymentServiceProvider',
        'PaymentServiceProviderName',
        'Type',
    ];

    protected $url = 'financial/Journals';

}

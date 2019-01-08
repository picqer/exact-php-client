<?php

namespace Picqer\Financials\Exact;

/**
 * Class Journal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialJournals
 *
 * @property string $ID Primary Key
 * @property bool $AllowVariableCurrency Indicates if the journal allows variable currency
 * @property bool $AllowVariableExchangeRate Indicates if the journal allows the exchange rate of the currency of the amounts in the journal entry to be changed
 * @property bool $AllowVAT Indicates if the journal allows the use of VAT in the financial entry. Especially true for general journals
 * @property bool $AutoSave Indicates if the journal automatically saves the entries when the amount is in balance with the entry lines
 * @property string $Bank Reference to bank account
 * @property string $BankAccountBICCode BIC code of the bank where the bank account is held
 * @property string $BankAccountCountry Country of bank account
 * @property string $BankAccountDescription Description of BankAccount
 * @property string $BankAccountIBAN IBAN of the bank account
 * @property string $BankAccountID Reference to the Bank Account linked to the Journal
 * @property string $BankAccountIncludingMask Bank account number. Is mandatory for Journals that have Type = Bank
 * @property bool $BankAccountUseSEPA Obsolete. Whether or not use SEPA for the bank account
 * @property bool $BankAccountUseSepaDirectDebit Obsolete. Whether or not use SEPA direct debit for the bank account
 * @property string $BankName Name of bank account
 * @property string $Code Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Default Currency of the Journal. If AllowVariableCurrency is false this is the only currency that can be used
 * @property string $CurrencyDescription Description of Currency
 * @property string $Description Name of the Journal
 * @property int $Division Division code
 * @property string $GLAccount Suspense general ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $GLAccountType Type of GLAccount
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PaymentInTransitAccount General ledger account for payment in transit
 * @property string $PaymentServiceAccountIdentifier Identifier detail of the Payment service account. Ex. EmailID for Paypal type of Payment service account
 * @property int $PaymentServiceProvider Type of Payment service provider. The following values are supported: 1 (Adyen), 2 (Paypal), 3 (Stripe). Is mandatory for Journals of Type 16 (Payment service)
 * @property string $PaymentServiceProviderName Name of the Payment service provider
 * @property int $Type Type of Journal. The following values are supported: 10 (Cash) 12 (Bank) 16 (Payment service) 20 (Sales) 21 (Return invoice) 22 (Purchase) 23 (Received return invoice) 90 (General journal)
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

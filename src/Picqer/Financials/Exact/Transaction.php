<?php 

namespace Picqer\Financials\Exact;

/**
 * Class Transaction
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionTransactions
 * 
 * @property Guid $EntryID Primary key
 * @property Double $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property DateTime $Created Creation date
 * @property DateTime $Date Date
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Guid $Document Document linked to the sales or purchase transaction.
 * @property Int32 $DocumentNumber Number of the document.
 * @property String $DocumentSubject Subject of the document.
 * @property Int32 $EntryNumber Entry number
 * @property String $ExternalLinkDescription Description of the external link.
 * @property String $ExternalLinkReference External link in a sales or purchase transaction.
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property Boolean $IsExtraDuty 0 =  Financial entry without extra duty, 1 = Financial entry with extra duty
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Double $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property String $PaymentConditionCode Code of PaymentCondition
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property String $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 * @property TransactionLines $TransactionLines Collection of lines
 * @property Int32 $Type 3000 = Budget
 * @property String $TypeDescription The description of the transaction type
 */
class Transaction extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'EntryID';

    protected $fillable = [
        'EntryID',
        'ClosingBalanceFC',
        'Created',
        'Date',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'EntryNumber',
        'ExternalLinkDescription',
        'ExternalLinkReference',
        'FinancialPeriod',
        'FinancialYear',
        'IsExtraDuty',
        'JournalCode',
        'JournalDescription',
        'Modified',
        'OpeningBalanceFC',
        'PaymentConditionCode',
        'PaymentConditionDescription',
        'PaymentReference',
        'Status',
        'StatusDescription',
        'TransactionLines',
        'Type',
        'TypeDescription'
    ];

    protected $url = 'financialtransaction/Transactions';

}

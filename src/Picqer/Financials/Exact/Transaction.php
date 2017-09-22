<?php namespace Picqer\Financials\Exact;

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
 * @property Int32 $Type The transaction type.10 = Opening balance142 = Issue to parent20 = Sales entry145 = Shop order time entry21 = Sales credit note146 = Shop order time entry reversal30 = Purchase entry147 = Shop order by-product receipt31 = Purchase credit note148 = Shop order by-product reversal40 = Cash flow150 = Requirement issue50 = VAT return151 = Requirement reversal70 = Asset - Depreciation152 = Returned from parent71 = Asset - Investment155 = Subcontract Issue72 = Asset - Revaluation156 = Subcontract reversal73 = Asset - Transfer158 = Shop order completed74 = Asset - Split162 = Finish assembly75 = Asset - Discontinue170 = Payroll76 = Asset - Sales180 = Stock revaluation80 = Revaluation181 = Financial revaluation82 = Exchange rate difference195 = Stock count83 = Payment difference290 = Correction entry84 = Deferred revenue310 = Period closing85 = Tracking number:Revaluation320 = Year end reflection86 = Deferred cost321 = Year end costing87 = VAT on prepayment322 = Year end profits to gross profit90 = Other323 = Year end costs to gross profit120 = Delivery324 = Year end tax121 = Sales return325 = Year end gross profit to net p/l130 = Receipt326 = Year end net p/l to balance sheet131 = Purchase return327 = Year end closing balance140 = Shop order stock receipt328 = Year start opening balance141 = Shop order stock reversal3000 = Budget
 * @property String $TypeDescription The description of the transaction type
 */
class Transaction extends Model
{

    use Query\Findable;
    use Persistance\Storable;

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
        'TypeDescription',
    ];

    protected $url = 'financialtransaction/Transactions';

}

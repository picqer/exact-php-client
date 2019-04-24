<?php

namespace Picqer\Financials\Exact;

/**
 * Class Transaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionTransactions
 * @deprecated as of the 1st of April the “/financialtransaction/Transactions” API will be deprecated
 *
 * @property string $EntryID Primary key
 * @property float $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Date Date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Document linked to the sales or purchase transaction.
 * @property int $DocumentNumber Number of the document.
 * @property string $DocumentSubject Subject of the document.
 * @property int $EntryNumber Entry number
 * @property string $ExternalLinkDescription Description of the external link.
 * @property string $ExternalLinkReference External link in a sales or purchase transaction.
 * @property int $FinancialPeriod Financial period
 * @property int $FinancialYear Financial year
 * @property bool $IsExtraDuty 0 =  Financial entry without extra duty, 1 = Financial entry with extra duty
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property string $PaymentConditionCode Code of PaymentCondition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property TransactionLines $TransactionLines Collection of lines
 * @property int $Type The transaction type.10 = Opening balance142 = Issue to parent20 = Sales entry145 = Shop order time entry21 = Sales credit note146 = Shop order time entry reversal30 = Purchase entry147 = Shop order by-product receipt31 = Purchase credit note148 = Shop order by-product reversal40 = Cash flow150 = Requirement issue50 = VAT return151 = Requirement reversal70 = Asset - Depreciation152 = Returned from parent71 = Asset - Investment155 = Subcontract Issue72 = Asset - Revaluation156 = Subcontract reversal73 = Asset - Transfer158 = Shop order completed74 = Asset - Split162 = Finish assembly75 = Asset - Discontinue170 = Payroll76 = Asset - Sales180 = Stock revaluation80 = Revaluation181 = Financial revaluation82 = Exchange rate difference195 = Stock count83 = Payment difference290 = Correction entry84 = Deferred revenue310 = Period closing85 = Tracking number:Revaluation320 = Year end reflection86 = Deferred cost321 = Year end costing87 = VAT on prepayment322 = Year end profits to gross profit90 = Other323 = Year end costs to gross profit120 = Delivery324 = Year end tax121 = Sales return325 = Year end gross profit to net p/l130 = Receipt326 = Year end net p/l to balance sheet131 = Purchase return327 = Year end closing balance140 = Shop order stock receipt328 = Year start opening balance141 = Shop order stock reversal3000 = Budget
 * @property string $TypeDescription The description of the transaction type
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

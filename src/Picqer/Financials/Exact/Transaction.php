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
 * @property bool $IsExtraDuty 0 = Financial entry without extra duty, 1 = Financial entry with extra duty
 * @property string $JournalCode Code of Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property float $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property string $PaymentConditionCode Code of PaymentCondition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property TransactionLine[] $TransactionLines Collection of lines
 * @property int $Type The transaction type.10 = Opening balance141 = Shop order stock reversal20 = Sales entry142 = Issue to parent21 = Sales credit note145 = Shop order time entry30 = Purchase entry146 = Shop order time entry reversal31 = Purchase credit note147 = Shop order by-product receipt40 = Cash flow148 = Shop order by-product reversal50 = VAT return150 = Requirement issue70 = Asset - Depreciation151 = Requirement reversal71 = Asset - Investment152 = Returned from parent72 = Asset - Revaluation155 = Subcontract Issue73 = Asset - Transfer156 = Subcontract reversal74 = Asset - Split158 = Shop order completed75 = Asset - Discontinue162 = Finish assembly76 = Asset - Sales170 = Payroll80 = Revaluation180 = Stock revaluation82 = Exchange rate difference181 = Financial revaluation83 = Payment difference195 = Stock count84 = Deferred revenue290 = Correction entry85 = Tracking number:Revaluation310 = Period closing86 = Deferred cost320 = Year end reflection87 = VAT on prepayment321 = Year end costing90 = Other322 = Year end profits to gross profit95 = Accrued revenue323 = Year end costs to gross profit96 = Accrued costs324 = Year end tax120 = Delivery325 = Year end gross profit to net p/l121 = Sales return326 = Year end net p/l to balance sheet130 = Receipt327 = Year end closing balance131 = Purchase return328 = Year start opening balance140 = Shop order stock receipt3000 = Budget
 * @property string $TypeDescription The description of the transaction type
 */
class Transaction extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

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

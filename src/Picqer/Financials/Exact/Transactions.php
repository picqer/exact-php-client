<?php namespace Picqer\Financials\Exact;

/**
 * Class Transactions
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialtransactionTransactions
 *
 * @property Double $ClosingBalanceFC Closing balance in the currency of the transaction
 * @property DateTime $Date Creation date
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Int32 $EntryNumber Entry number
 * @property Int16 $FinancialPeriod Financial period
 * @property Int16 $FinancialYear Financial year
 * @property String $JournalCode Code of Journal
 * @property String $JournalDescription Description of Journal
 * @property Double $OpeningBalanceFC Opening balance in the currency of the transaction
 * @property String $PaymentConditionCode Code of PaymentCondition
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 * @property TransactionLines $TransactionLines Collection of lines
 * @property Int32 $Type The transaction type. 10 = Opening balance, 20 = Sales entry, 21 = Sales credit note, 22 = Return invoice sent, 30 = Purchase entry, 31 = Purchase credit note, 32 = Return invoice received, 40 = Cash flow, 50 = VAT return, 70 = Asset depreciation, 71 = Asset investment, 72 = Asset revaluation, 73 = Asset transfer, 74 = Asset split, 75 = Asset discontinue, 76 = Asset sales, 80 = Revaluation, 82 = Exchange rate difference, 83 = Payment difference, 84 = Deferred revenue, 85 = Tracking number:Revaluation, 86 = Deferred cost, 90 = Other, 120 = Delivery, 121 = Sales return, 130 = Receipt, 131 = Purchase return, 140 = Shop order stock receipt, 141 = Shop order stock reversal, 142 = Issue to parent, 145 = Shop order time entry, 146 = Shop order time entry reversal, 150 = Requirement issue, 151 = Requirement reversal, 152 = Returned from parent, 155 = Subcontract Issue, 156 = Subcontract reversal, 158 = Shop order completed, 162 = Finish assembly, 170 = Payroll, 180 = Stock revaluation, 195 = Stock count, 290 = Correction entry, 310 = Period closing, 320 = Year end reflection, 321 = Year end costing, 322 = Year end profits to gross profit, 323 = Year end costs to gross profit, 324 = Year end tax, 325 = Year end gross profit to net p/l, 326 = Year end net p/l to balance sheet, 327 = Year end closing balance, 328 = Year start opening balance, 3000 = Budget
 * @property String $TypeDescription The description of the transaction type
 */
class Transactions extends Model
{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'EntryID';
    
    protected $fillable = [
        'ClosingBalanceFC',
        'Date',
        'Description',
        'Division',
        'EntryNumber',
        'FinancialPeriod',
        'FinancialYear',
        'JournalCode',
        'JournalDescription',
        'OpeningBalanceFC',
        'PaymentConditionCode',
        'PaymentConditionDescription',
        'Status',
        'StatusDescription',
        'TransactionLines',
        'Type',
        'TypeDescription'
    ];
    protected $url = 'financialtransaction/Transactions';
}
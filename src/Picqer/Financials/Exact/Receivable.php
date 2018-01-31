<?php

namespace Picqer\Financials\Exact;

/**
 * Class Receivable
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowReceivables
 * 
 * @property Guid $ID  Identifier of the receivable.
 * @property Guid $Account The customer from which the receivable will come.
 * @property Guid $AccountBankAccountID The bank account of the customer, from which the receivable will come.
 * @property String $AccountBankAccountNumber The bank account number of the customer, from which the receivable will come.
 * @property String $AccountCode The code of the customer from which the receivable will come.
 * @property Guid $AccountContact Contact person copied from the purchase invoice linked to the related purchase entry.
 * @property String $AccountContactName Name of the contact person of the customer.
 * @property String $AccountName Name of the customer.
 * @property Double $AmountDC The amount in default currency (division currency). Receivables are matched on this amount.
 * @property Double $AmountDiscountDC The amount of the discount in the default currency.
 * @property Double $AmountDiscountFC The amount of the discount. This is in the amount of the selected currency.
 * @property Double $AmountFC The amount of the receivable. This is in the amount of the selected currency.
 * @property Guid $BankAccountID Own bank account to which the receivable will be done.
 * @property String $BankAccountNumber Own bank account number to which the receivable will be done.
 * @property String $CashflowTransactionBatchCode When processing receivables, all receivable with the same processing data are put in a batch. This field contains the code of that batch.
 * @property DateTime $Created Creation date.
 * @property Guid $Creator User ID of the creator.
 * @property String $CreatorFullName Name of the creator.
 * @property String $Currency The currency of the receivable. This currency can only deviate from the division currency if the module Currency is in the license.
 * @property String $Description Description.
 * @property Guid $DirectDebitMandate Direct Debit Mandate used to collect the receivable.
 * @property String $DirectDebitMandateDescription Description of the mandate.
 * @property Int16 $DirectDebitMandatePaymentType Payment type of the mandate.
 * @property String $DirectDebitMandateReference Unique mandate reference.
 * @property Int16 $DirectDebitMandateType Type of the mandate.
 * @property DateTime $DiscountDueDate Date before which the payment by the customer must be done to be eligible for discount.
 * @property Int32 $Division Division code.
 * @property Guid $Document Document that is created when processing collections. The bank export file is attached to the document.
 * @property Int32 $DocumentNumber Number of the document.
 * @property String $DocumentSubject Subject of the document.
 * @property DateTime $DueDate Date before which the payment by the customer must be done.
 * @property DateTime $EndDate Date since when the receivable is no longer an outstanding item. This is the highest invoice date of all matched receivables.
 * @property Int16 $EndPeriod Period since when the receivable is no longer an outstanding item. This is the highest period of all matched receivables.
 * @property String $EndToEndID The value of the tag 'EndToEndID' when generating a SEPA file.
 * @property Int16 $EndYear Year (of period) since when the receivable is no longer an outstanding item. This is the highest year of all matched receivables. Used in combination with EndPeriod.
 * @property DateTime $EntryDate Processing date of the receivable.
 * @property Guid $EntryID The unique identifier for a set of receivables. A receivable can be split so that one part is received on a different date. In that case the two records get a different EntryID.
 * @property Int32 $EntryNumber Entry number of the linked transaction.
 * @property Guid $GLAccount G/L account of the payment. Must be of type 20 (Accounts receivable).
 * @property String $GLAccountCode Code of the G/L account.
 * @property String $GLAccountDescription Description of the G/L account.
 * @property DateTime $InvoiceDate Invoice date of the linked transaction.
 * @property Int32 $InvoiceNumber Invoice number of the linked transaction.
 * @property Byte $IsBatchBooking Boolean indicating whether the receivable is part of a batch booking.
 * @property Boolean $IsFullyPaid Boolean indicating whether the receivable was fully paid by the customer.
 * @property String $Journal Journal of the linked transaction.
 * @property String $JournalDescription Description of the journal.
 * @property DateTime $LastPaymentDate Last payment date.
 * @property DateTime $Modified Last modified date.
 * @property Guid $Modifier User ID of modifier.
 * @property String $ModifierFullName Name of modifier.
 * @property String $PaymentCondition Payment condition of the linked transaction.
 * @property String $PaymentConditionDescription Description of the payment condition.
 * @property Int32 $PaymentDays Number of days between invoice date and due date.
 * @property Int32 $PaymentDaysDiscount Number of days between invoice date and due date of the discount.
 * @property Double $PaymentDiscountPercentage Payment discount percentage.
 * @property String $PaymentInformationID PaymentInformationID tag from the SEPA xml file.
 * @property String $PaymentMethod Method of payment.
 * @property String $PaymentReference Payment reference for the receivable that may be included In the bank export file
 * @property Double $RateFC Exchange rate from receivable currency to division currency. AmountFC * RateFC = AmountDC.
 * @property Int32 $ReceivableBatchNumber Number assigned during the processing of receivables.
 * @property DateTime $ReceivableSelected Date and time since when the receivable is selected to be collected.
 * @property Guid $ReceivableSelector User who selected the receivable to be collected.
 * @property String $ReceivableSelectorFullName Name of the receivable selector.
 * @property Int32 $Source The source of the receivable.
 * @property Int16 $Status The status of the receivable.
 * @property Double $TransactionAmountDC Total amount of the linked transaction in default currency (division currency).
 * @property Double $TransactionAmountFC Total amount of the linked transaction in the selected currency.
 * @property DateTime $TransactionDueDate Due date of the linked transaction.
 * @property Guid $TransactionEntryID Linked transaction. Use this as reference to SalesEntries.
 * @property Guid $TransactionID Linked transaction line. Use this as reference to BankEntryLines and CashEntryLines.
 * @property Boolean $TransactionIsReversal Indicates if the linked transaction is a reversal entry.
 * @property Int16 $TransactionReportingPeriod Period of the linked transaction.
 * @property Int16 $TransactionReportingYear Year of the linked transaction.
 * @property Int16 $TransactionStatus Status of the linked transaction.
 * @property Int32 $TransactionType Type of the linked transaction.
 * @property String $YourRef Invoice number. In case the receivable belongs to a bank entry line and is matched with one invoice, YourRef is filled with the YourRef of this invoice.
 */
class Receivable extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ID';

    protected $fillable = [
        'Account',
        'AccountBankAccountID',
        'AccountBankAccountNumber',
        'AccountCode',
        'AccountContact',
        'AccountContactName',
        'AccountName',
        'AmountDC',
        'AmountDiscountDC',
        'AmountDiscountFC',
        'AmountFC',
        'BankAccountID',
        'BankAccountNumber',
        'CashflowTransactionBatchCode',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Description',
        'DirectDebitMandate',
        'DirectDebitMandateDescription',
        'DirectDebitMandatePaymentType',
        'DirectDebitMandateReference',
        'DirectDebitMandateType',
        'DiscountDueDate',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'EndDate',
        'EndPeriod',
        'EndToEndID',
        'EndYear',
        'EntryDate',
        'EntryID',
        'EntryNumber',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'InvoiceDate',
        'InvoiceNumber',
        'IsBatchBooking',
        'IsFullyPaid',
        'Journal',
        'JournalDescription',
        'LastPaymentDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentDays',
        'PaymentDaysDiscount',
        'PaymentDiscountPercentage',
        'PaymentInformationID',
        'PaymentMethod',
        'PaymentReference',
        'RateFC',
        'ReceivableBatchNumber',
        'ReceivableSelected',
        'ReceivableSelector',
        'ReceivableSelectorFullName',
        'Source',
        'Status',
        'TransactionAmountDC',
        'TransactionAmountFC',
        'TransactionDueDate',
        'TransactionEntryID',
        'TransactionID',
        'TransactionIsReversal',
        'TransactionReportingPeriod',
        'TransactionReportingYear',
        'TransactionStatus',
        'TransactionType',
        'YourRef',
    ];

    protected $url = 'cashflow/Receivables';
}

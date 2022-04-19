<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncPaymentTerm.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncCashflowPaymentTerms
 *
 * @property int $Timestamp Timestamp
 * @property string $Account The supplier to which the payment has to be done.
 * @property string $AccountBankAccountID The bank account of the supplier, to which the payment has to be done.
 * @property string $AccountBankAccountNumber The bank account number of the supplier, to which the payment has to be done.
 * @property string $AccountCode The code of the supplier to which the payment has to be done.
 * @property string $AccountContact Contact person copied from the purchase invoice linked to the related purchase entry. Used as prefered contact when sending reminders.
 * @property string $AccountContactName Name of the contact person of the supplier.
 * @property string $AccountCountry Country code of the customer.
 * @property string $AccountName Name of the supplier.
 * @property float $AmountDC The amount in default currency (division currency). Payments are matched on this amount.
 * @property float $AmountDiscountDC The amount of the discount in the default currency.
 * @property float $AmountDiscountFC The amount of the discount. This is in the amount of the selected currency.
 * @property float $AmountFC The amount of the payment. This is in the amount of the selected currency.
 * @property int $ApprovalStatus Shows the approval status of the payment. Values can be 1 N/A, 2 Awaiting review, 3 Awaiting approval, 4 Approved, 5 Rejected. Approval of payments is not enabled in all subscriptions. If turned of the ApprovalStatus is null
 * @property string $BankAccountID Own bank account from which the payment must be done.
 * @property string $BankAccountNumber Own bank account number from which the payment must be done.
 * @property string $CashflowTransactionBatchCode When processing payments, all payments with the same processing data are put in a batch. This field contains the code of that batch.
 * @property string $Created Creation date.
 * @property string $Creator User ID of the creator.
 * @property string $CreatorFullName Name of the creator.
 * @property string $Currency The currency of the payment. This currency can only deviate from the division currency if the module Currency is in the license.
 * @property string $Description Extra description for the payment that may be included in the bank export file.
 * @property string $DirectDebitMandate Direct Debit Mandate used to collect the PaymentTerms.
 * @property string $DirectDebitMandateDescription Description of the mandate.
 * @property int $DirectDebitMandatePaymentType Payment type of the mandate. 0 = One off payment 1 = Recurrent payment.
 * @property string $DirectDebitMandateReference Unique mandate reference.
 * @property int $DirectDebitMandateType Type of the mandate. 0 = Core 1 = Business-to-business.
 * @property string $DiscountDueDate Date before which the payment must be done to be eligible for discount.
 * @property int $Division Division code.
 * @property string $Document Document that is created when processing payments. The bank export file is attached to the document.
 * @property int $DocumentNumber Number of the document.
 * @property string $DocumentSubject Subject of the document.
 * @property string $DueDate Date before which the payment must be done.
 * @property string $EndDate Date since when the payment is no longer an outstanding item. This is the highest invoice date of all matched payments.
 * @property int $EndPeriod Period since when the payment is no longer an outstanding item. This is the highest period of all matched payments.
 * @property string $EndToEndID The value of the tag 'EndToEndID' when generating a SEPA file.
 * @property int $EndYear Year (of period) since when the payment is no longer an outstanding item. This is the highest year of all matched payments. Used in combination with EndPeriod.
 * @property string $EntryDate Processing date of the payment.
 * @property string $EntryID The unique identifier for a set of payments. A payment can be split so that one part is paid on a different date. In that case the two records get a different EntryID.
 * @property int $EntryNumber Entry number of the linked transaction.
 * @property string $GLAccount G/L account of the payment. Must be of type 22 (Accounts payable).
 * @property string $GLAccountCode Code of the G/L account.
 * @property string $GLAccountDescription Description of the G/L account.
 * @property string $ID Identifier of the PaymentTerms.
 * @property string $InvoiceDate Invoice date of the linked transaction.
 * @property int $InvoiceNumber Invoice number of the linked transaction.
 * @property int $IsBatchBooking Boolean indicating whether the payment is part of a batch booking.
 * @property bool $IsFullyPaid Boolean indicating whether the receivable was fully paid by the customer.
 * @property string $Journal Journal of the linked transaction.
 * @property string $JournalDescription Description of the journal.
 * @property string $LastPaymentDate Last payment date.
 * @property int $LineType Determines if the record is a payment or receipt. In case of payment the value is 22, in case of receipt the value is 20
 * @property string $Modified Last modified date.
 * @property string $Modifier User ID of modifier.
 * @property string $ModifierFullName Name of modifier.
 * @property int $OrderNumber Order number of the linked transaction.
 * @property int $PaymentBatchNumber Number assigned during the of processing payments. When payments are processed a bank export file is created. This file contains one or more batches that contain one or more payments. Each batch gets a sequence number that is stored for each payment in that batch.
 * @property string $PaymentCondition Payment condition of the linked transaction.
 * @property string $PaymentConditionDescription Description of the payment condition.
 * @property int $PaymentDays Number of days between invoice date and due date.
 * @property int $PaymentDaysDiscount Number of days between invoice date and due date of the discount.
 * @property float $PaymentDiscountPercentage Payment discount percentage.
 * @property string $PaymentInformationID PaymentInformationID tag from the SEPA xml file.
 * @property string $PaymentMethod Method of payment. B = On credit (default) I = Collection K = Cash V = Credit card.
 * @property string $PaymentReference Payment reference for the payment that may be included in the bank export file.
 * @property string $PaymentSelected Date and time since when the payment is selected to be paid.
 * @property string $PaymentSelector User who selected the payment to be paid.
 * @property string $PaymentSelectorFullName Name of the payment selector.
 * @property float $RateFC Exchange rate from payment currency to division currency. AmountFC * RateFC = AmountDC.
 * @property int $ReceivableBatchNumber Number assigned during the processing of receivables.
 * @property string $ReceivableSelected Date and time since when the receivable is selected to be collected.
 * @property string $ReceivableSelector User who selected the receivable to be collected.
 * @property string $ReceivableSelectorFullName Name of the receivable selector.
 * @property int $Source The source of the payment.
 * @property int $Status The status of the payment. 20 = open 30 = selected - payment is selected to be paid 40 = processed - payment has been done 50 = matched - payment is matched with one or more other outstanding items or financial statement lines
 * @property float $TransactionAmountDC Total amount of the linked transaction in default currency (division currency).
 * @property float $TransactionAmountFC Total amount of the linked transaction in the selected currency.
 * @property string $TransactionDueDate Due date of the linked transaction.
 * @property string $TransactionEntryID Linked transaction. Use this as reference to PurchaseEntries.
 * @property string $TransactionID Linked transaction line. Use this as reference to PurchaseEntryLines.
 * @property bool $TransactionIsReversal Indicates if the linked transaction is a reversal entry.
 * @property int $TransactionReportingPeriod Period of the linked transaction.
 * @property int $TransactionReportingYear Year of the linked transaction.
 * @property int $TransactionStatus Status of the linked transaction.
 * @property int $TransactionType Type of the linked transaction.
 * @property string $YourRef Invoice number of the supplier. In case the payment belongs to a bank entry line and is matched with one invoice, YourRef is filled with the YourRef of this invoice.
 */
class SyncPaymentTerm extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Account',
        'AccountBankAccountID',
        'AccountBankAccountNumber',
        'AccountCode',
        'AccountContact',
        'AccountContactName',
        'AccountCountry',
        'AccountName',
        'AmountDC',
        'AmountDiscountDC',
        'AmountDiscountFC',
        'AmountFC',
        'ApprovalStatus',
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
        'ID',
        'InvoiceDate',
        'InvoiceNumber',
        'IsBatchBooking',
        'IsFullyPaid',
        'Journal',
        'JournalDescription',
        'LastPaymentDate',
        'LineType',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderNumber',
        'PaymentBatchNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentDays',
        'PaymentDaysDiscount',
        'PaymentDiscountPercentage',
        'PaymentInformationID',
        'PaymentMethod',
        'PaymentReference',
        'PaymentSelected',
        'PaymentSelector',
        'PaymentSelectorFullName',
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

    protected $url = 'sync/Cashflow/PaymentTerms';
}

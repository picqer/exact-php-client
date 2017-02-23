<?php 

namespace Picqer\Financials\Exact;

/**
 * Class Payment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowPayments
 * 
 * @property Guid $ID Identifier of the payment.
 * @property Guid $Account The supplier to which the payment has to be done.
 * @property Guid $AccountBankAccountID The bank account of the supplier, to which the payment has to be done.
 * @property String $AccountBankAccountNumber The bank account number of the supplier, to which the payment has to be done.
 * @property String $AccountCode The code of the supplier to which the payment has to be done.
 * @property Guid $AccountContact Contact person copied from the purchase invoice linked to the related purchase entry. Used as prefered contact when sending reminders.
 * @property String $AccountContactName Name of the contact person of the supplier.
 * @property String $AccountName Name of the supplier.
 * @property Double $AmountDC The amount in default currency (division currency). Payments are matched on this amount.
 * @property Double $AmountDiscountDC The amount of the discount in the default currency.
 * @property Double $AmountDiscountFC The amount of the discount. This is in the amount of the selected currency.
 * @property Double $AmountFC The amount of the payment. This is in the amount of the selected currency.
 * @property Guid $BankAccountID Own bank account from which the payment must be done.
 * @property String $BankAccountNumber Own bank account number from which the payment must be done.
 * @property String $CashflowTransactionBatchCode When processing payments, all payments with the same processing data are put in a batch. This field contains the code of that batch.
 * @property DateTime $Created Creation date.
 * @property Guid $Creator User ID of the creator.
 * @property String $CreatorFullName Name of the creator.
 * @property String $Currency The currency of the payment. This currency can only deviate from the division currency if the module Currency is in the license.
 * @property String $Description Extra description for the payment that may be included in the bank export file.
 * @property DateTime $DiscountDueDate Date before which the payment must be done to be eligible for discount.
 * @property Int32 $Division Division code.
 * @property Guid $Document Document that is created when processing payments.  The bank export file is attached to the document.
 * @property Int32 $DocumentNumber Number of the document.
 * @property String $DocumentSubject Subject of the document.
 * @property DateTime $DueDate Date before which the payment must be done.
 * @property DateTime $EndDate Date since when the payment is no longer an outstanding item. This is the highest invoice date of all matched payments.
 * @property Int16 $EndPeriod Period since when the payment is no longer an outstanding item. This is the highest period of all matched payments.
 * @property Int16 $EndYear Year (of period) since when the payment is no longer an outstanding item. This is the highest year of all matched payments. Used in combination with EndPeriod.
 * @property DateTime $EntryDate Processing date of the payment.
 * @property Guid $EntryID The unique identifier for a set of payments. A payment can be split so that one part is paid on a different date. In that case the two records get a different EntryID.
 * @property Int32 $EntryNumber Entry number of the linked transaction.
 * @property Guid $GLAccount G/L account of the payment. Must be of type 22 (Accounts payable).
 * @property String $GLAccountCode Code of the G/L account.
 * @property String $GLAccountDescription Description of the G/L account.
 * @property DateTime $InvoiceDate Invoice date of the linked transaction.
 * @property Int32 $InvoiceNumber Invoice number of the linked transaction.
 * @property Byte $IsBatchBooking Boolean indicating whether the payment is part of a batch booking.
 * @property String $Journal Journal of the linked transaction.
 * @property String $JournalDescription Description of the journal.
 * @property DateTime $Modified Last modified date.
 * @property Guid $Modifier User ID of modifier.
 * @property String $ModifierFullName Name of modifier.
 * @property Int32 $PaymentBatchNumber Number assigned during the of processing payments. When payments are processed a bank export file is created. This file contains one or more batches that contain one or more payments. Each batch gets a sequence number that is stored for each payment in that batch.
 * @property String $PaymentCondition Payment condition of the linked transaction.
 * @property String $PaymentConditionDescription Description of the payment condition.
 * @property Int32 $PaymentDays Number of days between invoice date and due date.
 * @property Int32 $PaymentDaysDiscount Number of days between invoice date and due date of the discount.
 * @property Double $PaymentDiscountPercentage Payment discount percentage.
 * @property String $PaymentMethod Method of payment. B = On credit (default) I = Collection K = Cash V = Credit card.
 * @property String $PaymentReference Payment reference for the payment that may be included in the bank export file.
 * @property DateTime $PaymentSelected Date and time since when the payment is selected to be paid.
 * @property Guid $PaymentSelector User who selected the payment to be paid.
 * @property String $PaymentSelectorFullName Name of the payment selector.
 * @property Double $RateFC Exchange rate from payment currency to division currency. AmountFC * RateFC = AmountDC.
 * @property Int32 $Source The source of the payment. 1 = manual 2 = reconcile 3 = match 4 = import 5 = process
 * @property Int16 $Status The status of the payment. 20 = open 30 = selected - payment is selected to be paid 40 = processed - payment has been done 50 = matched - payment is matched with one or more other outstanding items or financial statement lines
 * @property Double $TransactionAmountDC Total amount of the linked transaction in default currency (division currency).
 * @property Double $TransactionAmountFC Total amount of the linked transaction in the selected currency.
 * @property DateTime $TransactionDueDate Due date of the linked transaction.
 * @property Guid $TransactionEntryID Linked transaction. Use this as reference to PurchaseEntries.
 * @property Guid $TransactionID Linked transaction line. Use this as reference to BankEntryLines and CashEntryLines.
 * @property Boolean $TransactionIsReversal Indicates if the linked transaction is a reversal entry.
 * @property Int16 $TransactionReportingPeriod Period of the linked transaction.
 * @property Int16 $TransactionReportingYear Year of the linked transaction.
 * @property Int16 $TransactionStatus Status of the linked transaction.
 * @property Int32 $TransactionType Type of the linked transaction.
 * @property String $YourRef Invoice number of the supplier. In case the payment belongs to a bank entry line and is matched with one invoice, YourRef is filled with the YourRef of this invoice.
 */
class Payment extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
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
        'DiscountDueDate',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'EndDate',
        'EndPeriod',
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
        'Journal',
        'JournalDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentBatchNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentDays',
        'PaymentDaysDiscount',
        'PaymentDiscountPercentage',
        'PaymentMethod',
        'PaymentReference',
        'PaymentSelected',
        'PaymentSelector',
        'PaymentSelectorFullName',
        'RateFC',
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
        'YourRef'
    ];

    protected $url = 'cashflow/Payments';

}

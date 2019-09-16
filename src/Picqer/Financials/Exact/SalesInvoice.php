<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesInvoice.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesInvoices
 *
 * @property string $InvoiceID Primary key
 * @property float $AmountDC For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property float $AmountDiscount Discount amount in the default currency of the company
 * @property float $AmountDiscountExclVat Discount amount exclude VAT in the default currency of the company
 * @property float $AmountFC For the header this is the sum of all lines, including VAT
 * @property float $AmountFCExclVat For the header this is the sum of all lines, excluding VAT
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency for the invoice. Default this is the currency of the administration
 * @property string $DeliverTo Delivery account for invoice
 * @property string $DeliverToAddress Address of delivery as per invoice delivery account
 * @property string $DeliverToContactPerson Delivery account person for invoice
 * @property string $DeliverToContactPersonFullName Name of delivery account's contact person as per invoice
 * @property string $DeliverToName Name of the delivery account's customer as per invoice
 * @property string $Description Description. Can be different for header and lines
 * @property float $Discount Discount percentage
 * @property int $DiscountType Leading field of total discount. 1=Discount percentage, 2=Discount amount excl. VAT, 3=Discount amount incl. VAT, 4=Total amount excl. VAT, 5=Total amount incl. VAT
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the invoice
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property float $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid by the customer to your G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property string $InvoiceDate Official date for the invoice. When the invoice is entered it's equal to the field 'EntryDate'. During the printing process the invoice date can be entered
 * @property int $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property string $InvoiceTo Reference to the Customer who will receive the invoice
 * @property string $InvoiceToContactPerson Reference to the Contact person of the customer who will receive the invoice
 * @property string $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property string $InvoiceToName Name of the customer who will receive the invoice
 * @property bool $IsExtraDuty Indicates whether the invoice has extra duty
 * @property string $Journal The journal code. Every invoice should be linked to a sales journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OrderDate Order date
 * @property string $OrderedBy Customer who ordered the invoice
 * @property string $OrderedByContactPerson Contact person of customer who ordered the invoice
 * @property string $OrderedByContactPersonFullName Name of contact person of customer who ordered the invoice
 * @property string $OrderedByName Name of customer who ordered the invoice
 * @property int $OrderNumber Number to identify the order. By default the number is based on a setting for the first free number, but you can post your own number.
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference Payment reference for sales invoice
 * @property string $Remarks Extra remarks
 * @property salesinvoicelines $SalesInvoiceLines Collection of lines
 * @property string $Salesperson Sales representative
 * @property string $SalespersonFullName Name of sales representative
 * @property int $StarterSalesInvoiceStatus Starter Sales invoice status (for starter functionality)
 * @property string $StarterSalesInvoiceStatusDescription Description of StarterSalesInvoiceStatus
 * @property int $Status The status of the entry. 10 = draft. During the creation of an invoice draft records occur in the draft modus if during an invoice a new page with lines is triggered. If the user leaves the invoice in an abnormal way the draft invoices can be recovered. Draft invoices are not included in financial reports, balances etc. 20 = open. Open invoices can be changed. New invoices get the status open by default. 50 = processed. Processed invoices can't be changed anymore. Processing is done via printing. Processed invoices can't be reopened
 * @property string $StatusDescription Description of Status
 * @property string $TaxSchedule Obsolete
 * @property string $TaxScheduleCode Obsolete
 * @property string $TaxScheduleDescription Obsolete
 * @property int $Type Indicates the type of invoice Values: 8020 - Sales invoices, 8021 - Sales credit note, 8023 - Direct sales invoice, 8024 - Direct credit note
 * @property string $TypeDescription Description of the type
 * @property float $VATAmountDC Total VAT amount in the default currency of the company
 * @property float $VATAmountFC Total VAT amount in the currency of the transaction
 * @property string $Warehouse Mandatory for direct sales invoice/credit note, cannot be set for normal sales invoice/credit note.
 * @property float $WithholdingTaxAmountFC Withholding tax amount applied to sales invoice
 * @property float $WithholdingTaxBaseAmount Withholding tax base amount to calculate withholding amount
 * @property float $WithholdingTaxPercentage Withholding tax percentage applied to sales invoice
 * @property string $YourRef The invoice number of the customer
 */
class SalesInvoice extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'InvoiceID';

    protected $fillable = [
        'InvoiceID',
        'AmountDC',
        'AmountDiscount',
        'AmountDiscountExclVat',
        'AmountFC',
        'AmountFCExclVat',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DeliverTo',
        'DeliverToAddress',
        'DeliverToContactPerson',
        'DeliverToContactPersonFullName',
        'DeliverToName',
        'Description',
        'Discount',
        'DiscountType',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'ExtraDutyAmountFC',
        'GAccountAmountFC',
        'InvoiceDate',
        'InvoiceNumber',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'IsExtraDuty',
        'Journal',
        'JournalDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentReference',
        'Remarks',
        'SalesInvoiceLines',
        'Salesperson',
        'SalespersonFullName',
        'StarterSalesInvoiceStatus',
        'StarterSalesInvoiceStatusDescription',
        'Status',
        'StatusDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'Type',
        'TypeDescription',
        'VATAmountDC',
        'VATAmountFC',
        'Warehouse',
        'WithholdingTaxAmountFC',
        'WithholdingTaxBaseAmount',
        'WithholdingTaxPercentage',
        'YourRef',
    ];

    protected $url = 'salesinvoice/SalesInvoices';

    /**
     * Updates the SalesInvoiceLines collection on a SalesInvoice if it's been detected as a deferred collection.
     * Fetches results and stores them on this object.
     *
     * @return mixed
     */
    public function getSalesInvoiceLines()
    {
        if (array_key_exists('__deferred', $this->attributes['SalesInvoiceLines'])) {
            $this->attributes['SalesInvoiceLines'] = (new SalesInvoiceLine($this->connection()))->filter("InvoiceID eq guid'{$this->InvoiceID}'");
        }

        return $this->attributes['SalesInvoiceLines'];
    }
}

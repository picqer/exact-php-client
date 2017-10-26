<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesInvoice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesInvoices
 *
 * @property Guid $InvoiceID Primary key
 * @property Double $AmountDC For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property Double $AmountDiscount Discount amount in the default currency of the company
 * @property Double $AmountDiscountExclVat Discount amount exclude VAT in the default currency of the company
 * @property Double $AmountFC For the header this is the sum of all lines, including VAT
 * @property Double $AmountFCExclVat For the header this is the sum of all lines, excluding VAT
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency for the invoice. Default this is the currency of the administration
 * @property Guid $DeliverTo Delivery account for invoice
 * @property Guid $DeliverToAddress Address of delivery as per invoice delivery account
 * @property Guid $DeliverToContactPerson Delivery account person for invoice
 * @property String $DeliverToContactPersonFullName Name of delivery account's contact person as per invoice
 * @property String $DeliverToName Name of the delivery account's customer as per invoice
 * @property String $Description Description. Can be different for header and lines
 * @property Double $Discount Discount percentage
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is manually linked to the invoice
 * @property Int32 $DocumentNumber Number of the document
 * @property String $DocumentSubject Subject of the document
 * @property DateTime $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property Double $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property Double $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid by the customer to your G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property DateTime $InvoiceDate Official date for the invoice. When the invoice is entered it's equal to the field 'EntryDate'. During the printing process the invoice date can be entered
 * @property Int32 $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property Guid $InvoiceTo Reference to the Customer who will receive the invoice
 * @property Guid $InvoiceToContactPerson Reference to the Contact person of the customer who will receive the invoice
 * @property String $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property String $InvoiceToName Name of the customer who will receive the invoice
 * @property Boolean $IsExtraDuty Indicates whether the invoice has extra duty
 * @property String $Journal The journal code. Every invoice should be linked to a sales journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property DateTime $OrderDate Order date
 * @property Guid $OrderedBy Customer who ordered the invoice
 * @property Guid $OrderedByContactPerson Contact person of customer who ordered the invoice
 * @property String $OrderedByContactPersonFullName Name of contact person of customer who ordered the invoice
 * @property String $OrderedByName Name of customer who ordered the invoice
 * @property Int32 $OrderNumber Number to identify the order. By default the number is based on a setting for the first free number, but you can post your own number.
 * @property String $PaymentCondition The payment condition used for due date and discount calculation
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property String $PaymentReference Payment reference for sales invoice
 * @property String $Remarks Extra remarks
 * @property SalesInvoiceLines $SalesInvoiceLines Collection of lines
 * @property Guid $Salesperson Sales representative
 * @property String $SalespersonFullName Name of sales representative
 * @property Int16 $StarterSalesInvoiceStatus Starter Sales invoice status (for starter functionality)
 * @property String $StarterSalesInvoiceStatusDescription Description of StarterSalesInvoiceStatus
 * @property Int16 $Status The status of the entry. 10 = draft. During the creation of an invoice draft records occur in the draft modus if during an invoice a new page with lines is triggered. If the user leaves the invoice in an abnormal way the draft invoices can be recovered. Draft invoices are not included in financial reports, balances etc. 20 = open. Open invoices can be changed. New invoices get the status open by default. 50 = processed. Processed invoices can't be changed anymore. Processing is done via printing. Processed invoices can't be reopened
 * @property String $StatusDescription Description of Status
 * @property Guid $TaxSchedule Obsolete
 * @property String $TaxScheduleCode Obsolete
 * @property String $TaxScheduleDescription Obsolete
 * @property Int32 $Type Indicates the type of invoice Values: 8020 - Sales invoices, 8021 - Sales credit note
 * @property String $TypeDescription Description of the type
 * @property Double $VATAmountDC Total VAT amount in the default currency of the company
 * @property Double $VATAmountFC Total VAT amount in the currency of the transaction
 * @property Double $WithholdingTaxAmountFC Withholding tax amount applied to sales invoice
 * @property Double $WithholdingTaxBaseAmount Withholding tax base amount to calculate withholding amount
 * @property Double $WithholdingTaxPercentage Withholding tax percentage applied to sales invoice
 * @property String $YourRef The invoice number of the customer
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
    public function getSalesInvoiceLines() {
        if(array_key_exists('__deferred', $this->attributes['SalesInvoiceLines'])) {
            $this->attributes['SalesInvoiceLines'] = (new SalesInvoiceLine($this->connection()))->filter("InvoiceID eq guid'{$this->InvoiceID}'");
        }
        return $this->attributes['SalesInvoiceLines'];
    }
}

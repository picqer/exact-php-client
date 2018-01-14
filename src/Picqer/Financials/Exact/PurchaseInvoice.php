<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseInvoice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchasePurchaseInvoices
 *
 * @property Guid $ID A guid that is the unique identifier of the purchase invoice.
 * @property Double $Amount The amount including VAT in the currency of the invoice.
 * @property Guid $ContactPerson Guid identifying the contact person of the supplier.
 * @property String $Currency The code of the currency of the invoiced amount.
 * @property String $Description The description of the invoice.
 * @property Guid $Document Guid identifying a document that is attached to the invoice.
 * @property DateTime $DueDate The date before which the invoice has to be paid.
 * @property Int32 $EntryNumber The unique number of the purchase invoice. The entry number is based on a setting in the purchase journal and incremented for each new purchase invoice.
 * @property Double $ExchangeRate The exchange rate between the invoice currency and the default currency of the division.
 * @property Int16 $FinancialPeriod The financial period in which the invoice is entered.
 * @property Int16 $FinancialYear The financial year in which the invoice is entered.
 * @property DateTime $InvoiceDate The date on which the supplier entered the invoice.
 * @property String $Journal The code of the purchase journal in which the invoice is entered.
 * @property DateTime $Modified The date and time the invoice was last modified.
 * @property String $PaymentCondition The code of the payment condition that is used to calculate the due date and discount.
 * @property String $PaymentReference Unique reference to match payments and invoices.
 * @property PurchaseInvoiceLines $PurchaseInvoiceLines The collection of lines that belong to the purchase invoice.
 * @property String $Remarks The user can enter remarks related to the invoice here.
 * @property Int16 $Source Indicates the origin of the invoice. 1 Manual entry, 3 Purchase invoice, 4 Purchase order, 5 Web service.
 * @property Int16 $Status The status of the invoice. 10 Draft, 20 Open, 50 Processed.
 * @property Guid $Supplier Guid that identifies the supplier.
 * @property Int16 $Type Indicates the type of the purchase invoice. 8030 Direct purchase invoice, 8031 Direct purchase invoice (Credit), 8033 Purchase invoice, 8034 Purchase invoice (Credit)
 * @property Double $VATAmount The total VAT amount of the purchase invoice.
 * @property Guid $Warehouse Guid that identifies the warehouse that will receive the purchased goods. This is mandatory for creating a direct purchase invoice.
 * @property String $YourRef The invoice number provided by the supplier.
 */
class PurchaseInvoice extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Amount',
        'ContactPerson',
        'Currency',
        'Description',
        'Document',
        'DueDate',
        'EntryNumber',
        'ExchangeRate',
        'FinancialPeriod',
        'FinancialYear',
        'InvoiceDate',
        'Journal',
        'Modified',
        'PaymentCondition',
        'PaymentReference',
        'PurchaseInvoiceLines',
        'Remarks',
        'Source',
        'Status',
        'Supplier',
        'Type',
        'VATAmount',
        'Warehouse',
        'YourRef',
    ];

    protected $url = 'purchase/PurchaseInvoices';

    /**
     * Updates the PurchaseInvoiceLines collection on a PurchaseInvoice if it's been detected as a deferred collection.
     * Fetches results and stores them on this object.
     *
     * @return mixed
     */
    public function getSalesInvoiceLines() {
        if(array_key_exists('__deferred', $this->attributes['PurchaseInvoiceLines'])) {
            $this->attributes['PurchaseInvoiceLines'] = (new PurchaseInvoiceLine($this->connection()))->filter("InvoiceID eq guid'{$this->ID}'");
        }
        return $this->attributes['PurchaseInvoiceLines'];
    }
}

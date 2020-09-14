<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseInvoice.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchasePurchaseInvoices
 *
 * @property string $ID A guid that is the unique identifier of the purchase invoice.
 * @property float $Amount The amount including VAT in the currency of the invoice.
 * @property string $ContactPerson Guid identifying the contact person of the supplier.
 * @property string $Currency The code of the currency of the invoiced amount.
 * @property string $Description The description of the invoice.
 * @property string $Document Guid identifying a document that is attached to the invoice.
 * @property string $DueDate The date before which the invoice has to be paid.
 * @property int $EntryNumber The unique number of the purchase invoice. The entry number is based on a setting in the purchase journal and incremented for each new purchase invoice.
 * @property float $ExchangeRate The exchange rate between the invoice currency and the default currency of the division.
 * @property int $FinancialPeriod The financial period in which the invoice is entered.
 * @property int $FinancialYear The financial year in which the invoice is entered.
 * @property string $InvoiceDate The date on which the supplier entered the invoice.
 * @property string $Journal The code of the purchase journal in which the invoice is entered.
 * @property string $Modified The date and time the invoice was last modified.
 * @property string $PaymentCondition The code of the payment condition that is used to calculate the due date and discount.
 * @property string $PaymentReference Unique reference to match payments and invoices.
 * @property purchaseinvoicelines $PurchaseInvoiceLines The collection of lines that belong to the purchase invoice.
 * @property string $Remarks The user can enter remarks related to the invoice here.
 * @property int $Source Indicates the origin of the invoice. 1 Manual entry, 3 Purchase invoice, 4 Purchase order, 5 Web service.
 * @property int $Status The status of the invoice. 10 Draft, 20 Open, 50 Processed.
 * @property string $Supplier Guid that identifies the supplier.
 * @property int $Type Indicates the type of the purchase invoice. 8030 Direct purchase invoice, 8031 Direct purchase invoice (Credit), 8033 Purchase invoice, 8034 Purchase invoice (Credit)
 * @property float $VATAmount The total VAT amount of the purchase invoice.
 * @property string $Warehouse Guid that identifies the warehouse that will receive the purchased goods. This is mandatory for creating a direct purchase invoice.
 * @property string $YourRef The invoice number provided by the supplier.
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
    public function getPurchaseInvoiceLines($statement = '')
    {
        if (array_key_exists('__deferred', $this->attributes['PurchaseInvoiceLines'])) {
            $this->attributes['PurchaseInvoiceLines'] = (new PurchaseInvoiceLine($this->connection()))->filter("InvoiceID eq guid'{$this->ID}'", '', '', $statement);
        }

        return $this->attributes['PurchaseInvoiceLines'];
    }

    /**
     * @deprecated This function got renamed, still here for backward compatibility. To be removed in next major version.
     */
    public function getSalesInvoiceLines($statement = '')
    {
        return $this->getPurchaseInvoiceLines($statement);
    }
}

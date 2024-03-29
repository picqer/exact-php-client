<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseEntryPurchaseEntries
 *
 * @property string $EntryID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property int $BatchNumber The number of the batch of entries. Normally a batch consists of multiple entries. Batchnumbers are filled for invoices created by: - Fixed entries - Prolongation (only available with module hosting)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $CustomField Custom field endpoint
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Document number
 * @property string $DocumentSubject Document subject
 * @property string $DueDate Date when payment should be done
 * @property string $EntryDate Invoice date
 * @property int $EntryNumber Entry number
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference External link
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid to the suppliers G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property int $InvoiceNumber Invoice number
 * @property string $Journal Journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $OrderNumber Order number
 * @property string $PaymentCondition Payment condition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentConditionPaymentMethod Payment method of Payment condition. Values: B = On credit, I = Collection, K = Cash
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $ProcessNumber Internal processing number, only relevant for Germany
 * @property PurchaseEntryLine[] $PurchaseEntryLines Collection of lines
 * @property float $Rate Currency exchange rate
 * @property int $ReportingPeriod The period of the transaction lines. The period should exist in the period date table
 * @property int $ReportingYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property bool $Reversal Indicates that amounts are reversed
 * @property int $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property string $Supplier Reference to supplier (account)
 * @property string $SupplierName Name of supplier
 * @property int $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property string $TypeDescription Description of Type
 * @property float $VATAmountDC Vat Amount in the default currency of the company
 * @property float $VATAmountFC Vat Amount in the currency of the transaction
 * @property string $YourRef Your reference
 */
class PurchaseEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $purchaseEntryLines = [];

    protected $fillable = [
        'EntryID',
        'AmountDC',
        'AmountFC',
        'BatchNumber',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomField',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'EntryDate',
        'EntryNumber',
        'ExternalLinkDescription',
        'ExternalLinkReference',
        'GAccountAmountFC',
        'InvoiceNumber',
        'Journal',
        'JournalDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentConditionPaymentMethod',
        'PaymentReference',
        'ProcessNumber',
        'PurchaseEntryLines',
        'Rate',
        'ReportingPeriod',
        'ReportingYear',
        'Reversal',
        'Status',
        'StatusDescription',
        'Supplier',
        'SupplierName',
        'Type',
        'TypeDescription',
        'VATAmountDC',
        'VATAmountFC',
        'YourRef',
    ];

    protected $url = 'purchaseentry/PurchaseEntries';

    public function addItem(array $array)
    {
        if (! isset($this->attributes['PurchaseEntryLines']) || $this->attributes['PurchaseEntryLines'] == null) {
            $this->attributes['PurchaseEntryLines'] = [];
        }
        if (! isset($array['LineNumber'])) {
            $array['LineNumber'] = count($this->attributes['PurchaseEntryLines']) + 1;
        }
        $this->attributes['PurchaseEntryLines'][] = $array;
    }
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseEntryPurchaseEntries
 *
 * @property Guid $EntryID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property Int32 $BatchNumber Batch number
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency code
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Guid $Document Reference to document
 * @property Int32 $DocumentNumber Document number
 * @property String $DocumentSubject Document subject
 * @property DateTime $DueDate Date when payment should be done
 * @property DateTime $EntryDate Entry date
 * @property Int32 $EntryNumber Entry number
 * @property String $ExternalLinkDescription Description of ExternalLink
 * @property String $ExternalLinkReference External link
 * @property Double $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid to the suppliers G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property Int32 $InvoiceNumber Invoice number
 * @property String $Journal Journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $OrderNumber Order number
 * @property String $PaymentCondition Payment condition
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property String $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property Int32 $ProcessNumber
 * @property PurchaseEntryLines $PurchaseEntryLines Collection of lines
 * @property Double $Rate Currency exchange rate
 * @property Int16 $ReportingPeriod Reporting period
 * @property Int16 $ReportingYear Reporting year
 * @property Boolean $Reversal Indicates that amounts are reversed
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 * @property Guid $Supplier Reference to supplier (account)
 * @property String $SupplierName Name of supplier
 * @property Int32 $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property String $TypeDescription Description of Type
 * @property Double $VATAmountDC Vat Amount in the default currency of the company
 * @property Double $VATAmountFC Vat Amount in the currency of the transaction
 * @property String $YourRef Your reference
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

    protected $url = 'purchaseentry/PurchaseEntries';
}

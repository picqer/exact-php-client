<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesEntrySalesEntries
 *
 * @property string $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property float $AmountDC Amount in the default currency of the company. For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property float $AmountFC Amount in the currency of the transaction. For the header this is the sum of all lines, including VAT
 * @property int $BatchNumber The number of the batch of entries. Normally a batch consists of multiple entries. Batchnumbers are filled for invoices created by: - Fixed entries - Prolongation (only available with module hosting)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency for the invoice. By default this is the currency of the administration
 * @property string $Customer Reference to customer (account)
 * @property string $CustomerName Name of customer
 * @property string $Description Description. Can be different for header and lines
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the invoice
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property string $EntryDate The date when the invoice is entered
 * @property int $EntryNumber Entry number
 * @property string $ExternalLinkDescription Description of ExternalLink
 * @property string $ExternalLinkReference Reference of ExternalLink
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid by the customer to your G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property int $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property bool $IsExtraDuty Indicates whether the invoice has extra duty
 * @property string $Journal The journal code. Every invoice should be linked to a sales journal
 * @property string $JournalDescription Description of Journal
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $OrderNumber Number to indentify the invoice. Order numbers are not unique. Default the number is based on a setting for the first free number
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property int $ProcessNumber
 * @property float $Rate Foreign currency rate
 * @property int $ReportingPeriod The period of the transaction lines. The period should exist in the period date table
 * @property int $ReportingYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property bool $Reversal Indicates if amounts are reversed
 * @property salesentrylines $SalesEntryLines Collection of lines
 * @property int $Status Status: 20 = Open, 50 = Processed
 * @property string $StatusDescription Description of Status
 * @property int $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property string $TypeDescription Description of Type
 * @property float $VATAmountDC Vat amount in the default currency of the company
 * @property float $VATAmountFC Vat amount in the currency of the transaction
 * @property float $WithholdingTaxAmountDC Withholding tax amount
 * @property float $WithholdingTaxBaseAmount Withholding tax base amount to calculate withholding amount
 * @property float $WithholdingTaxPercentage Withholding tax percentage
 * @property string $YourRef The invoice number of the customer
 */
class SalesEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $saleEntryLines = [];

    protected $fillable = [
        'EntryID',
        'AmountDC',
        'AmountFC',
        'BatchNumber',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Customer',
        'CustomerName',
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
        'IsExtraDuty',
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
        'Rate',
        'ReportingPeriod',
        'ReportingYear',
        'Reversal',
        'SalesEntryLines',
        'Status',
        'StatusDescription',
        'Type',
        'TypeDescription',
        'VATAmountDC',
        'VATAmountFC',
        'WithholdingTaxAmountDC',
        'WithholdingTaxBaseAmount',
        'WithholdingTaxPercentage',
        'YourRef',
    ];

    public function addItem(array $array)
    {
        if (! isset($this->attributes['SalesEntryLines']) || $this->attributes['SalesEntryLines'] == null) {
            $this->attributes['SalesEntryLines'] = [];
        }
        if (! isset($array['LineNumber'])) {
            $array['LineNumber'] = count($this->attributes['SalesEntryLines']) + 1;
        }
        $this->attributes['SalesEntryLines'][] = $array;
    }

    protected $url = 'salesentry/SalesEntries';
}

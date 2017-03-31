<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesentrySalesEntries
 *
 * @property Guid $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property Double $AmountDC Amount in the default currency of the company. For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property Double $AmountFC Amount in the currency of the transaction. For the header this is the sum of all lines, including VAT
 * @property Int32 $BatchNumber The number of the batch of entries. Normally a batch consists of multiple entries. Batchnumbers are filled for invoices created by: - Fixed entries - Prolongation (only available with module hosting)
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency for the invoice. By default this is the currency of the administration
 * @property Guid $Customer Reference to customer (account)
 * @property String $CustomerName Name of customer
 * @property String $Description Description. Can be different for header and lines
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is manually linked to the invoice
 * @property Int32 $DocumentNumber Number of the document
 * @property String $DocumentSubject Subject of the document
 * @property DateTime $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property DateTime $EntryDate The date when the invoice is entered
 * @property Int32 $EntryNumber Entry number
 * @property String $ExternalLinkDescription Description of ExternalLink
 * @property String $ExternalLinkReference Reference of ExternalLink
 * @property Int32 $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property Boolean $IsExtraDuty Indicates whether the invoice has extra duty
 * @property String $Journal The journal code. Every invoice should be linked to a sales journal
 * @property String $JournalDescription Description of Journal
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $OrderNumber Number to indentify the invoice. Order numbers are not unique. Default the number is based on a setting for the first free number
 * @property String $PaymentCondition The payment condition used for due date and discount calculation
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property String $PaymentReference The payment reference used for bank imports, VAT return and Tax reference
 * @property Int32 $ProcessNumber 
 * @property Double $Rate Foreign currency rate
 * @property Int16 $ReportingPeriod The period of the transaction lines. The period should exist in the period date table
 * @property Int16 $ReportingYear The financial year to which the entry belongs. The financial year should exist in the period date table
 * @property Boolean $Reversal Indicates if amounts are reversed
 * @property SalesEntryLines $SalesEntryLines Collection of lines
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property String $StatusDescription Description of Status
 * @property Int32 $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property String $TypeDescription Description of Type
 * @property Double $VATAmountDC Vat amount in the default currency of the company
 * @property Double $VATAmountFC Vat amount in the currency of the transaction
 * @property String $YourRef The invoice number of the customer
 */
class SalesEntry extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $saleEntryLines = [ ];

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
        'YourRef',
    ];


    public function addItem(array $array)
    {
        if ( ! isset( $this->attributes['SalesEntryLines'] ) || $this->attributes['SalesEntryLines'] == null) {
            $this->attributes['SalesEntryLines'] = [ ];
        }
        if ( ! isset( $array['LineNumber'] )) {
            $array['LineNumber'] = count($this->attributes['SalesEntryLines']) + 1;
        }
        $this->attributes['SalesEntryLines'][] = $array;
    }


    protected $url = 'salesentry/SalesEntries';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=purchaseentryPurchaseEntries
 *
 * @property Guid $EntryID Primary key
 * @property Int32 $BatchNumber Batch number
 * @property Double $Currency Amount in the default currency of the company
 * @property String $Description Description
 * @property Guid $Document Reference to document
 * @property DateTime $DueDate Date when payment should be done
 * @property DateTime $EntryDate Entry date
 * @property Int32 $EntryNumber Entry number
 * @property String $ExternalLinkReference
 * @property Int32 $InvoiceNumber Invoice number
 * @property String $Journal Journal
 * @property Int32 $OrderNumber Order number
 * @property String $PaymentCondition Payment condition
 * @property Int32 $ProcessNumber
 * @property PurchaseEntryLines $PurchaseEntryLines Collection of lines
 * @property Double $Rate Currency exchange rate
 * @property Int16 $ReportingPeriod Reporting period
 * @property Int16 $ReportingYear Reporting year
 * @property Boolean $Reversal Indicates that amounts are reversed
 * @property Guid $Supplier Reference to supplier (account)
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
        'BatchNumber',
        'Currency',
        'Description',
        'Document',
        'DueDate',
        'EntryDate',
        'EntryNumber',
        'ExternalLinkReference',
        'InvoiceNumber',
        'Journal',
        'OrderNumber',
        'PaymentCondition',
        'ProcessNumber',
        'PurchaseEntryLines',
        'Rate',
        'ReportingPeriod',
        'ReportingYear',
        'Reversal',
        'Supplier',
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

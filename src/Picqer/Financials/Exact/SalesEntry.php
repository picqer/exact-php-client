<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesentrySalesEntries
 *
 * @property Int32 $Division Division code
 * @property Double $Currency Amount in the default currency of the company. For the header lines (LineNumber = 0) of an entry this is the SUM(AmountDC) of all lines
 * @property DateTime $EntryDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property Guid $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property Int32 $EntryNumber Entry number
 * @property Guid $Customer Reference to customer (account)
 * @property String $YourRef The invoice number of the customer
 * @property SalesEntryLines $SalesEntryLines Collection of lines
 * @property Guid $Document Document that is manually linked to the invoice
 * @property Int32 $Journal Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property DateTime $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property String $ExternalLinkReference Reference of ExternalLink
 * @property String $ExternalLinkDescription Description of ExternalLink
 * @property String $Description Description. Can be different for header and lines
 * @property Int16 $Status Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property DateTime $PaymentCondition The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 */
class SalesEntry extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $saleEntryLines = [ ];

    protected $fillable = [
        'Division',
        'Currency',
        'EntryDate',
        'EntryID',
        'EntryNumber',
        'Customer',
        'YourRef',
        'SalesEntryLines',
        'Document',
        'Journal',
        'DueDate',
        'ExternalLinkReference',
        'ExternalLinkDescription',
        'Description',
        'Status',
        'PaymentCondition',
        'PaymentReference'
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

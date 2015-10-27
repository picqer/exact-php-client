<?php namespace Picqer\Financials\Exact;

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
        if ( ! isset($this->attributes['PurchaseEntryLines']) || $this->attributes['PurchaseEntryLines'] == null)
        {
            $this->attributes['PurchaseEntryLines'] = [];
        }
        if ( ! isset($array['LineNumber']))
        {
            $array['LineNumber'] = count($this->attributes['PurchaseEntryLines']) + 1;
        }
        $this->attributes['PurchaseEntryLines'][] = $array;
    }


    protected $url = 'purchaseentry/PurchaseEntries';

}

<?php namespace Picqer\Financials\Exact;

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
        'PaymentCondition'
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
<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesentrySalesEntryLines
 *
 * @property Double $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC.
 * @property String $Description Description of Asset
 * @property Int32 $Division Division code
 * @property Guid $ID Primary key
 * @property Guid $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property Guid $GLAccount The GL Account of the invoice line. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property String $GLAccountCode Code of GLAccount
 * @property  $ItemDescription 
 * @property Double $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property String $VATCode The VAT code used when the invoice was registered
 * @property Double $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 * @property String $Notes Extra notes
 */
class SalesEntryLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'AmountDC',
        'Description',
        'Division',
        'ID',
        'EntryID',
        'GLAccount',
        'GLAccountCode',
        'ItemDescription',
        'Quantity',
        'VATCode',
        'VATPercentage',
        'Notes',

    ];

    protected $url = 'salesentry/SalesEntryLines';

}

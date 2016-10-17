<?php namespace Picqer\Financials\Exact;

use DateTime;
use Picqer\Financials\Exact\Model;
use Picqer\Financials\Exact\Persistance\Storable;
use Picqer\Financials\Exact\Query\Findable;

/**
 * Class SubscriptionLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=subscriptionSubscriptions
 *
 * @property Guid $ID Primary Key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $Costcenter Cost Center
 * @property String $Costunit Cost Unit
 * @property String $Description Description
 * @property String $Discount Discount
 * @property Guid $EntryID Entry ID
 * @property DateTime $FromDate From date
 * @property Guid $Item Reference to Item
 * @property Int $LineNumber Line number
 * @property Int $LineType Line Type
 * @property Double $NetPrice Net Price in the currency of the transaction
 * @property String $Notes Remarks
 * @property Double $Quantity Quantity
 * @property DateTime $ToDate To date
 * @property String $UnitCode Unit code
 * @property Double $UnitPrice Unit price in the currency of the transaction (price * unit factor)
 * @property Double $VATAmountFC Vat Amount in the currency of the transaction
 * @property String $VATCode VATCode
 */
class SubscriptionLine extends Model
{

    use Findable;
    use Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'Costcenter',
        'Costunit',
        'Description',
        'Discount',
        'EntryID',
        'FromDate',
        'Item',
        'LineNumber',
        'LineType',
        'NetPrice',
        'Notes',
        'Quantity',
        'ToDate',
        'UnitCode',
        'UnitPrice',
        'VATAmountFc',
        'VATCode'
    ];

    protected $url = 'subscription/SubscriptionLines';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionLines
 *
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $Costcenter Cost center
 * @property String $Costunit Cost unit
 * @property String $Description Description
 * @property Double $Discount Discount percentage
 * @property Int32 $Division Division code
 * @property Guid $EntryID Entry ID
 * @property DateTime $FromDate From date
 * @property Guid $Item Reference to Item
 * @property String $ItemDescription Description of Item
 * @property Int32 $LineNumber Line number
 * @property Int16 $LineType Reference to LineType
 * @property String $LineTypeDescription Description of LineType
 * @property Double $NetPrice Net price in the currency of the transaction
 * @property String $Notes Remarks
 * @property Double $Quantity Quantity
 * @property DateTime $ToDate To date
 * @property String $UnitCode Unit code
 * @property String $UnitDescription Description of Unit
 * @property Double $UnitPrice Unit price in the currency of the transaction (price * unit factor)
 * @property Double $VATAmountFC Vat Amount in the currency of the transaction
 * @property String $VATCode VATCode
 * @property String $VATCodeDescription Description of VATCode
 */
class SubscriptionLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'Costcenter',
        'Costunit',
        'Description',
        'Discount',
        'Division',
        'EntryID',
        'FromDate',
        'Item',
        'ItemDescription',
        'LineNumber',
        'LineType',
        'LineTypeDescription',
        'NetPrice',
        'Notes',
        'Quantity',
        'ToDate',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
    ];

    protected $url = 'subscription/SubscriptionLines';
}
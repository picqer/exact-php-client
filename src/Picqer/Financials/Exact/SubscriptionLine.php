<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Costcenter Cost center
 * @property string $Costunit Cost unit
 * @property string $Description Description
 * @property float $Discount Discount percentage
 * @property int $Division Division code
 * @property string $EntryID Entry ID
 * @property string $FromDate From date
 * @property string $Item Reference to Item
 * @property string $ItemDescription Description of Item
 * @property int $LineNumber Line number
 * @property int $LineType Reference to LineType
 * @property string $LineTypeDescription Description of LineType
 * @property float $NetPrice Net price in the currency of the transaction
 * @property string $Notes Remarks
 * @property float $Quantity Quantity
 * @property string $ToDate To date
 * @property string $UnitCode Unit code
 * @property string $UnitDescription Description of Unit
 * @property float $UnitPrice Unit price in the currency of the transaction (price * unit factor)
 * @property float $VATAmountFC Vat Amount in the currency of the transaction
 * @property string $VATCode VATCode
 * @property string $VATCodeDescription Description of VATCode
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

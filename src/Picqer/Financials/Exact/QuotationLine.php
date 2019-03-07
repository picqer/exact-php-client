<?php

namespace Picqer\Financials\Exact;

/**
 * Class QuotationLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMQuotationLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Description By default this contains the item description
 * @property float $Discount Discount given on the default price. This is stored as a fraction. ie 5.5% is stored as .055
 * @property int $Division Division code
 * @property string $Item Reference to the item that is sold in this quotation line
 * @property string $ItemDescription Description of the item
 * @property int $LineNumber Indicates the sequence of the lines within one quotation
 * @property float $NetPrice Net price of the quotation line
 * @property string $Notes Extra notes
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $QuotationID Identifies the quotation. All the lines of a quotation have the same QuotationID
 * @property int $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property string $UnitCode Code of the item unit
 * @property string $UnitDescription Description of the item unit
 * @property float $UnitPrice Price per item unit
 * @property float $VATAmountFC VAT amount of the line in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the quotation is invoiced
 * @property string $VATDescription Description of the VAT code
 * @property float $VATPercentage The VAT percentage of the VAT code
 * @property int $VersionNumber Number indicating the different reviews which are made for the quotation
 */
class QuotationLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'Description',
        'Discount',
        'Division',
        'Item',
        'ItemDescription',
        'LineNumber',
        'NetPrice',
        'Notes',
        'Quantity',
        'QuotationID',
        'QuotationNumber',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountFC',
        'VATCode',
        'VATDescription',
        'VATPercentage',
        'VersionNumber',
    ];

    protected $url = 'crm/QuotationLines';
}

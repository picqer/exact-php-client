<?php

namespace Picqer\Financials\Exact;

/**
 * Class QuotationLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMQuotationLines
 *
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $Description By default this contains the item description
 * @property Double $Discount Discount given on the default price. This is stored as a fraction. ie 5.5% is stored as .055
 * @property Int32 $Division Division code
 * @property Guid $Item Reference to the item that is sold in this quotation line
 * @property String $ItemDescription Description of the item
 * @property Int32 $LineNumber Indicates the sequence of the lines within one quotation
 * @property Double $NetPrice Net price of the quotation line
 * @property String $Notes Extra notes
 * @property Double $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property Guid $QuotationID Identifies the quotation. All the lines of a quotation have the same QuotationID
 * @property Int32 $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property String $UnitCode Code of the item unit
 * @property String $UnitDescription Description of the item unit
 * @property Double $UnitPrice Price per item unit
 * @property Double $VATAmountFC VAT amount of the line in the currency of the transaction
 * @property String $VATCode The VAT code that is used when the quotation is invoiced
 * @property String $VATDescription Description of the VAT code
 * @property Double $VATPercentage The VAT percentage of the VAT code
 * @property Int32 $VersionNumber Number indicating the different reviews which are made for the quotation
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

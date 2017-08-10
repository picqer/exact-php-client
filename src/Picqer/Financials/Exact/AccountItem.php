<?php namespace Picqer\Financials\Exact;

/**
 * Class AccountItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsAccountItems
 *
 * @property Guid $ID Item
 * @property Guid $Account Account
 * @property String $Barcode Barcode
 * @property String $Code Item code
 * @property String $CostPriceCurrency Currency of cost price
 * @property Double $CostPriceNew New cost price
 * @property Double $CostPriceStandard Standard cost price
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Double $DefaultSalesPrice Default sales price
 * @property String $Description Item Description
 * @property Int32 $Division Division code
 * @property DateTime $EndDate End date
 * @property Boolean $IsFractionAllowedItem Indicates if decimals are allowed in quantities
 * @property Boolean $IsSalesItem Indicates if this is a sales item
 * @property Boolean $IsStockItem Indicates if this is a stock item
 * @property Byte $IsTaxableItem Indicates if tax needs to be calculated for this item
 * @property Byte $IsWebshopItem Indicates if this is a webshop item
 * @property Guid $ItemGroup Item group
 * @property String $ItemGroupCode Code of Item group
 * @property String $ItemGroupDescription Description of Item group
 * @property Double $Margin Margin
 * @property Double $Markup Markup
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Notes Extra remarks
 * @property String $PictureName File name of picture
 * @property String $PictureThumbnailUrl Url where thumbnail picture can be retrieved
 * @property String $PictureUrl Url where picture can be retrieved
 * @property Double $ProjectedStock
 * @property Int32 $PurchaseLeadDays Number of days before purchase arrives
 * @property Double $QuantityToBeConsumed Quantity to be consumed
 * @property Double $QuantityToBeDelivered Quantity to be delivered
 * @property Double $QuantityToBeProduced Quantity to be produced
 * @property Double $QuantityToBeReceived Quantity to be received
 * @property Double $ReservedStock Quantity in stock that is reserved
 * @property String $SalesCurrency Currency of sales price
 * @property Double $SalesPrice Sales price
 * @property String $SalesVatCode Sales vat code
 * @property String $SalesVatCodeDescription Description of Sales vat code
 * @property DateTime $StartDate Start date
 * @property Double $Stock Quantity that is in stock
 * @property Guid $Unit Unit
 * @property String $UnitCode Code of unit
 * @property String $UnitDescription Description of unit
 * @property String $UnitType Type of unit: A=Area, L=Length, O=Other, T=Time, V=Volume, W=Weight
 */
class AccountItem extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'Barcode',
        'Code',
        'CostPriceCurrency',
        'CostPriceNew',
        'CostPriceStandard',
        'Created',
        'Creator',
        'CreatorFullName',
        'DefaultSalesPrice',
        'Description',
        'Division',
        'EndDate',
        'IsFractionAllowedItem',
        'IsSalesItem',
        'IsStockItem',
        'IsTaxableItem',
        'IsWebshopItem',
        'ItemGroup',
        'ItemGroupCode',
        'ItemGroupDescription',
        'Margin',
        'Markup',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PictureName',
        'PictureThumbnailUrl',
        'PictureUrl',
        'ProjectedStock',
        'PurchaseLeadDays',
        'QuantityToBeConsumed',
        'QuantityToBeDelivered',
        'QuantityToBeProduced',
        'QuantityToBeReceived',
        'ReservedStock',
        'SalesCurrency',
        'SalesPrice',
        'SalesVatCode',
        'SalesVatCodeDescription',
        'StartDate',
        'Stock',
        'Unit',
        'UnitCode',
        'UnitDescription',
        'UnitType',
    ];

    protected $url = 'read/logistics/AccountItems';
}

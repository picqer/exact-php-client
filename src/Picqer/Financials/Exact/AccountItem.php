<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsAccountItems
 *
 * @property string $ID Item
 * @property string $Account Account
 * @property string $Barcode Barcode
 * @property string $Code Item code
 * @property string $CostPriceCurrency Currency of cost price
 * @property float $CostPriceNew New cost price
 * @property float $CostPriceStandard Standard cost price
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property float $DefaultSalesPrice Default sales price
 * @property string $Description Item Description
 * @property int $Division Division code
 * @property string $EndDate End date
 * @property bool $IsFractionAllowedItem Indicates if decimals are allowed in quantities
 * @property bool $IsSalesItem Indicates if this is a sales item
 * @property bool $IsStockItem Indicates if this is a stock item
 * @property int $IsTaxableItem Indicates if tax needs to be calculated for this item
 * @property int $IsWebshopItem Indicates if this is a webshop item
 * @property string $ItemGroup Item group
 * @property string $ItemGroupCode Code of Item group
 * @property string $ItemGroupDescription Description of Item group
 * @property float $Margin Margin
 * @property float $Markup Markup
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Notes Extra remarks
 * @property string $PictureName File name of picture
 * @property string $PictureThumbnailUrl Url where thumbnail picture can be retrieved
 * @property string $PictureUrl Url where picture can be retrieved
 * @property float $ProjectedStock
 * @property int $PurchaseLeadDays Number of days before purchase arrives
 * @property float $QuantityToBeConsumed Quantity to be consumed
 * @property float $QuantityToBeDelivered Quantity to be delivered
 * @property float $QuantityToBeProduced Quantity to be produced
 * @property float $QuantityToBeReceived Quantity to be received
 * @property float $ReservedStock Quantity in stock that is reserved
 * @property string $SalesCurrency Currency of sales price
 * @property float $SalesPrice Sales price
 * @property string $SalesVatCode Sales vat code
 * @property string $SalesVatCodeDescription Description of Sales vat code
 * @property string $StartDate Start date
 * @property float $Stock Quantity that is in stock
 * @property string $Unit Unit
 * @property string $UnitCode Code of unit
 * @property string $UnitDescription Description of unit
 * @property string $UnitType Type of unit: A=Area, L=Length, O=Other, T=Time, V=Volume, W=Weight
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

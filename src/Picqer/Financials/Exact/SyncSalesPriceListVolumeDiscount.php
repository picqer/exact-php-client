<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSalesPriceListVolumeDiscount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncSalesSalesPriceListVolumeDiscounts
 *
 * @property int $Timestamp Timestamp
 * @property string $BasePrice ID of the base price. If base price = use the standard sales price, it shows null. If base price = set sales price, it shows ID of the sales price within this volume discount.
 * @property float $BasePriceAmount Amount of the base price. If base price = use the standard sales price, it shows the latest item sales price. If base price = set sales price, it shows the base price which defined in price list.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $Discount Discount
 * @property int $Division Division code
 * @property int $EntryMethod Indicates whether discount or the new price is leading : 1-Discount, 2-New price. Scenario 1. When entry method is Discount and use base price, Discounted price = (1 - SalesPriceListDetails.Discount) * SalesPriceListDetails.BasePriceAmount 2. When entry method is Discount and use Item's standard sales price, Discounted price = (1 - SalesPriceListDetails.Discount) * SalesItemPrices.Price 3. When entry method is New price, Discounted price = SalesPriceListDetails.NewPrice
 * @property string $ID Primary key
 * @property string $Item Item ID
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of the item
 * @property string $ItemGroup Item group ID
 * @property string $ItemGroupCode Item group code
 * @property string $ItemGroupDescription Item group description
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NewPrice New price after discount
 * @property float $NumberOfItemsPerUnit Number of the item per unit
 * @property string $PriceListCode Code of the PriceList
 * @property string $PriceListDescription Description of the PriceList
 * @property string $PriceListPeriod Price list period ID
 * @property float $Quantity Quantity
 * @property string $Unit Unit
 * @property string $UnitDescription Description of the unit
 */
class SyncSalesPriceListVolumeDiscount extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'BasePrice',
        'BasePriceAmount',
        'Created',
        'Creator',
        'CreatorFullName',
        'Discount',
        'Division',
        'EntryMethod',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemGroup',
        'ItemGroupCode',
        'ItemGroupDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NewPrice',
        'NumberOfItemsPerUnit',
        'PriceListCode',
        'PriceListDescription',
        'PriceListPeriod',
        'Quantity',
        'Unit',
        'UnitDescription',
    ];

    protected $url = 'sync/Sales/SalesPriceListVolumeDiscounts';
}

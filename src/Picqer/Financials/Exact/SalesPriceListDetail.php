<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesPriceListDetail.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesSalesPriceListDetails
 *
 * @property string $ID Primary key
 * @property string $Account Customer account Id
 * @property string $AccountName Customer account name
 * @property string $BasePrice ID of the base price.  If base price = use the standard sales price, it shows null.  If base price = set sales price, it shows ID of the sales price within this volume discount.
 * @property float $BasePriceAmount Amount of the base price.  If base price = use the standard sales price, it shows the latest item sales price. If base price = set sales price, it shows the base price which defined in price list.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency
 * @property float $Discount Discount
 * @property int $Division Division code
 * @property string $EndDate End date
 * @property int $EntryMethod Indicates whether discount or the new price is leading : 1-Discount, 2-New price.  Scenario  1. When entry method is Discount and use base price, Discounted price = (1 - SalesPriceListDetails.Discount) * SalesPriceListDetails.BasePriceAmount  2. When entry method is Discount and use Item's standard sales price, Discounted price = (1 - SalesPriceListDetails.Discount) * SalesItemPrices.Price  3. When entry method is New price, Discounted price = SalesPriceListDetails.NewPrice
 * @property string $Item Item
 * @property string $ItemDescription Description of the item
 * @property string $ItemGroup ItemGroup
 * @property string $ItemUnit Default sales unit of the item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NewPrice New price after discount
 * @property float $NumberOfItemsPerUnit Number of the item per unit
 * @property string $PriceListCode Code of the PriceList
 * @property string $PriceListId Id of the PriceList
 * @property float $Quantity Quantity
 * @property string $StartDate Start date
 * @property string $Unit Unit
 */
class SalesPriceListDetail extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'BasePrice',
        'BasePriceAmount',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Discount',
        'Division',
        'EndDate',
        'EntryMethod',
        'Item',
        'ItemDescription',
        'ItemGroup',
        'ItemUnit',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NewPrice',
        'NumberOfItemsPerUnit',
        'PriceListCode',
        'PriceListId',
        'Quantity',
        'StartDate',
        'Unit',
    ];

    protected $url = 'sales/SalesPriceListDetails';
}

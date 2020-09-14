<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemGroups
 *
 * @property string $ID Primary key
 * @property string $Code Code of the item group
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item group
 * @property int $Division Division code
 * @property string $GLCosts GL account on which the costs of items of this group will be booked
 * @property string $GLCostsCode Code of GLCosts
 * @property string $GLCostsDescription Description of GLCosts
 * @property string $GLPurchaseAccount GL Purchase account for purchase invoicing according to (non-) perpetual inventory method
 * @property string $GLPurchaseAccountCode Code of GLPurchase
 * @property string $GLPurchaseAccountDescription Description of GLPurchaseAccount
 * @property string $GLPurchasePriceDifference GL account that will be used for the 'Standard cost price' valuation method to balance the difference between purchase price and cost price
 * @property string $GLPurchasePriceDifferenceCode Code of GLPurchasePriceDifference
 * @property string $GLPurchasePriceDifferenceDescr Description of GLPurchasePriceDifference
 * @property string $GLRevenue GL account on which the revenue for items of this group will be booked
 * @property string $GLRevenueCode Code of GLRevenue
 * @property string $GLRevenueDescription Description of GLRevenue
 * @property string $GLStock GL account on which stock entries will be booked for items of this group
 * @property string $GLStockCode Code of GLStock
 * @property string $GLStockDescription Description of GLStock
 * @property string $GLStockVariance GL stock variance account for perpetual inventory
 * @property string $GLStockVarianceCode Code of GLStockVariance
 * @property string $GLStockVarianceDescription Description of GLStockVariance
 * @property int $IsDefault Indicates if this is the default item group that will be assigned when a new item is created
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 */
class ItemGroup extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'GLCosts',
        'GLCostsCode',
        'GLCostsDescription',
        'GLPurchaseAccount',
        'GLPurchaseAccountCode',
        'GLPurchaseAccountDescription',
        'GLPurchasePriceDifference',
        'GLPurchasePriceDifferenceCode',
        'GLPurchasePriceDifferenceDescr',
        'GLRevenue',
        'GLRevenueCode',
        'GLRevenueDescription',
        'GLStock',
        'GLStockCode',
        'GLStockDescription',
        'GLStockVariance',
        'GLStockVarianceCode',
        'GLStockVarianceDescription',
        'IsDefault',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'logistics/ItemGroups';
}

<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ItemGroup
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemGroups
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the item group
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the item group
 * @property Int32 $Division Division code
 * @property Guid $GLCosts GL account on which the costs of items of this group will be booked
 * @property String $GLCostsCode Code of GLCosts
 * @property String $GLCostsDescription Description of GLCosts
 * @property Guid $GLPurchaseAccount GL Purchase account for purchase invoicing according to (non-) perpetual inventory method
 * @property String $GLPurchaseAccountCode Code of GLPurchase
 * @property String $GLPurchaseAccountDescription Description of GLPurchaseAccount
 * @property Guid $GLPurchasePriceDifference GL account that will be used for the 'Standard cost price' valuation method to balance the difference between purchase price and cost price
 * @property String $GLPurchasePriceDifferenceCode Code of GLPurchasePriceDifference
 * @property String $GLPurchasePriceDifferenceDescr Description of GLPurchasePriceDifference
 * @property Guid $GLRevenue GL account on which the revenue for items of this group will be booked
 * @property String $GLRevenueCode Code of GLRevenue
 * @property String $GLRevenueDescription Description of GLRevenue
 * @property Guid $GLStock GL account on which stock entries will be booked for items of this group
 * @property String $GLStockCode Code of GLStock
 * @property String $GLStockDescription Description of GLStock
 * @property Guid $GLStockVariance GL stock variance account for perpetual inventory
 * @property String $GLStockVarianceCode Code of GLStockVariance
 * @property String $GLStockVarianceDescription Description of GLStockVariance
 * @property Byte $IsDefault Indicates if this is the default item group that will be assigned when a new item is created
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 */
class ItemGroup extends Model
{
    use Query\Findable;

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
        'Notes'
    ];

    protected $url = 'logistics/ItemGroups';

}

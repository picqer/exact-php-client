<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemGroup
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItemGroups
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
 * @property Guid $GLRevenue GL account on which the revenue for items of this group will be booked
 * @property String $GLRevenueCode Code of GLRevenue
 * @property String $GLRevenueDescription Description of GLRevenue
 * @property Guid $GLStock GL account on which stock entries will be booked for items of this group
 * @property String $GLStockCode Code of GLStock
 * @property String $GLStockDescription Description of GLStock
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
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
        'GLRevenue',
        'GLRevenueCode',
        'GLRevenueDescription',
        'GLStock',
        'GLStockCode',
        'GLStockDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'logistics/ItemGroups';

}
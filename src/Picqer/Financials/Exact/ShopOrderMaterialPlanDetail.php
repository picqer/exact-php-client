<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderMaterialPlanDetail.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderMaterialPlanDetails
 *
 * @property string $ID Primary key
 * @property int $Backflush Indicates if this is a backflush step
 * @property string $Calculator The calculator associated with this material plan
 * @property int $CalculatorType Calculator type
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int $Division Division code
 * @property int $IsBatch Does the material plan's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property int $IsSerial Does the material plan's item use serial numbers
 * @property float $IssuedQuantity Material plan issued quantity
 * @property string $Item Reference to Items table
 * @property string $ItemCode Item Code
 * @property string $ItemDescription Description of Item
 * @property string $ItemPictureUrl URL of the material item's picture
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property float $PlannedAmountFC Planned amount in the currency of the transaction
 * @property string $PlannedDate Date that the material is required.
 * @property float $PlannedIn Number of items that are planned to come in
 * @property float $PlannedOut Number of items that are planned to go out
 * @property float $PlannedPriceFC Planned price of the material
 * @property float $PlannedQuantity Intended quantity
 * @property float $PlannedQuantityFactor Intended quantity unit factor
 * @property float $RemainingQuantity Material plan remaining quantity
 * @property string $ShopOrder Reference to ShopOrders table
 * @property int $ShopOrderNumber Shop order number
 * @property int $Status Line status
 * @property string $StatusDescription Description of Status
 * @property float $Stock Number of items in stock
 * @property ItemWarehouseStorageLocation $StockLocations Collection of Manufacturing stock locations
 * @property string $SubShopOrder ID of the shop order linked to this material
 * @property int $SubShopOrderNumber Number of the shop order linked to this material
 * @property int $Type Type
 * @property string $Unit Unit
 * @property string $UnitDescription Unit description
 * @property string $Warehouse Shop order warehouse
 */
class ShopOrderMaterialPlanDetail extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Backflush',
        'Calculator',
        'CalculatorType',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DetailDrawing',
        'Division',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsSerial',
        'IssuedQuantity',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PlannedAmountFC',
        'PlannedDate',
        'PlannedIn',
        'PlannedOut',
        'PlannedPriceFC',
        'PlannedQuantity',
        'PlannedQuantityFactor',
        'RemainingQuantity',
        'ShopOrder',
        'ShopOrderNumber',
        'Status',
        'StatusDescription',
        'Stock',
        'StockLocations',
        'SubShopOrder',
        'SubShopOrderNumber',
        'Type',
        'Unit',
        'UnitDescription',
        'Warehouse',
    ];

    protected $url = 'manufacturing/ShopOrderMaterialPlanDetails';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncShopOrderMaterialPlan.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncManufacturingShopOrderMaterialPlans
 *
 * @property int $Timestamp Timestamp
 * @property int $Backflush Indicates if this is a backflush step
 * @property string $Barcode Barcode of the item (numeric string)
 * @property int $CalculatorType Calculator type
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int $Division Division code
 * @property string $ID Primary key
 * @property string $Item Reference to Items table
 * @property string $ItemCode Item Code (material)
 * @property string $ItemDescription Description of Item (material)
 * @property string $ItemMaterial Reference to BillOfMaterialMaterials
 * @property string $ItemPictureUrl URL of the material item's picture
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property float $PlannedAmountFC Planned amount in the currency of the transaction
 * @property string $PlannedDate Date that the material is required.
 * @property float $PlannedPriceFC Planned price of the material
 * @property float $PlannedQuantity Intended total planned quantity of the material including waste
 * @property float $PlannedQuantityFactor Intended quantity of the material per unit excluding waste
 * @property string $RoutingStepID ID of the routing step.
 * @property string $ShopOrder Reference to ShopOrders table
 * @property int $Status Line status: 5 = Draft, 10 = Open, 20 = On order, 25 = Partial, 30 = Finished
 * @property string $StatusDescription Description of Status
 * @property int $Type Type: 1 = Material, 2 = By-product
 * @property string $Unit Unit
 * @property string $UnitDescription Unit description
 * @property float $WastePercentage Waste percentage must be null or integer from 1 to 9999 (only available in Manufacturing Professional and Premium)
 */
class SyncShopOrderMaterialPlan extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Backflush',
        'Barcode',
        'CalculatorType',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DetailDrawing',
        'Division',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemMaterial',
        'ItemPictureUrl',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PlannedAmountFC',
        'PlannedDate',
        'PlannedPriceFC',
        'PlannedQuantity',
        'PlannedQuantityFactor',
        'RoutingStepID',
        'ShopOrder',
        'Status',
        'StatusDescription',
        'Type',
        'Unit',
        'UnitDescription',
        'WastePercentage',
    ];

    protected $url = 'sync/Manufacturing/ShopOrderMaterialPlans';
}

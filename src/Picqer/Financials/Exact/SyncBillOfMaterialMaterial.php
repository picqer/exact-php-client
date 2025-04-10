<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncBillOfMaterialMaterial.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncManufacturingBillOfMaterialMaterials
 *
 * @property int $Timestamp Timestamp
 * @property int $Backflush Indicates if this is a backflush item
 * @property int $CalculatorType Calculator type
 * @property float $CostBatch Cost batch
 * @property string $CostCenter Cost center
 * @property string $CostCenterDescription Cost center description
 * @property string $CostUnit Cost unit
 * @property string $CostUnitDescription Cost unit description
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int $Division Division code
 * @property string $ID Primary key
 * @property string $ItemVersion Bill of material version
 * @property int $LineNumber Line number
 * @property float $NetWeight Net weight
 * @property string $NetWeightUnit Net weight unit of measure
 * @property string $Notes Notes
 * @property string $PartItem Key of part item
 * @property float $PartItemAverageCost Item average cost available when average cost method is used
 * @property string $PartItemCode Part item code
 * @property float $PartItemCostPriceStandard Item standard cost available when standard cost method is used
 * @property string $PartItemDescription Part item description
 * @property float $Quantity Quantity of the material that ends up in the produced item
 * @property float $QuantityBatch Quantity of the material needed to produce the batch including the waste
 * @property string $RoutingStepID ID of the routing step
 * @property string $syscreated Creation date
 * @property string $syscreator User ID of creator
 * @property string $sysmodified Modified date
 * @property string $sysmodifier User ID of modifier
 * @property int $Type Material type 1 indicates material, 2 indicates byproduct
 * @property float $WastePercentage Waste percentage must be null or integer from 1 to 9999 (only available in Manufacturing Professional and Premium)
 */
class SyncBillOfMaterialMaterial extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Backflush',
        'CalculatorType',
        'CostBatch',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'CreatorFullName',
        'Description',
        'DetailDrawing',
        'Division',
        'ID',
        'ItemVersion',
        'LineNumber',
        'NetWeight',
        'NetWeightUnit',
        'Notes',
        'PartItem',
        'PartItemAverageCost',
        'PartItemCode',
        'PartItemCostPriceStandard',
        'PartItemDescription',
        'Quantity',
        'QuantityBatch',
        'RoutingStepID',
        'syscreated',
        'syscreator',
        'sysmodified',
        'sysmodifier',
        'Type',
        'WastePercentage',
    ];

    protected $url = 'sync/Manufacturing/BillOfMaterialMaterials';
}

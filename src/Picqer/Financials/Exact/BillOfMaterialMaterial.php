<?php

namespace Picqer\Financials\Exact;

/**
 * Class BillOfMaterialMaterial.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialMaterials
 *
 * @property string $ID Primary key
 * @property float $AverageCost Item average cost available when average cost method is used
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
 * @property string $ItemVersion Key of item version
 * @property int $LineNumber Line number
 * @property float $NetWeight Net weight
 * @property string $NetWeightUnit Net weight unit of measure
 * @property string $Notes Notes
 * @property string $PartItem Key of part item
 * @property string $PartItemCode Part item code
 * @property float $PartItemCostPriceStandard Item standard cost available when standard cost method is used
 * @property string $PartItemDescription Part item description
 * @property float $Quantity Quantity
 * @property float $QuantityBatch Quantity batch
 * @property string $syscreated Creation date
 * @property string $syscreator User ID of creator
 * @property string $sysmodified Modified date
 * @property string $sysmodifier User ID of modifier
 * @property int $Type Material type 1 indicates material, 2 indicates byproduct
 */
class BillOfMaterialMaterial extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AverageCost',
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
        'ItemVersion',
        'LineNumber',
        'NetWeight',
        'NetWeightUnit',
        'Notes',
        'PartItem',
        'PartItemCode',
        'PartItemCostPriceStandard',
        'PartItemDescription',
        'Quantity',
        'QuantityBatch',
        'syscreated',
        'syscreator',
        'sysmodified',
        'sysmodifier',
        'Type',
    ];

    protected $url = 'manufacturing/BillOfMaterialMaterials';
}

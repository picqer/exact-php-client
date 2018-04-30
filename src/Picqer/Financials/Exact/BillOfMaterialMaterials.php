<?php

namespace Picqer\Financials\Exact;

/**
 * Class BillOfMaterialMaterials
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialMaterials
 *
 * @property Guid $ID Primary key
 * @property Double $AverageCost Item average cost available when average cost method is used
 * @property Byte $Backflush Indicates if this is a backflush item
 * @property Int32 $CalculatorType Calculator type
 * @property Double $CostBatch Cost batch
 * @property String $CostCenter Cost center
 * @property String $CostCenterDescription Cost center description
 * @property String $CostUnit Cost unit
 * @property String $CostUnitDescription Cost unit description
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the material
 * @property String $DetailDrawing Detail drawing reference
 * @property Int32 $Division Division code
 * @property Guid $ItemVersion Key of item version
 * @property Int32 $LineNumber Line number
 * @property Double $NetWeight Net weight
 * @property String $NetWeightUnit Net weight unit of measure
 * @property String $Notes Notes
 * @property Guid $PartItem Key of part item
 * @property String $PartItemCode Part item code
 * @property Double $PartItemCostPriceStandard Item standard cost available when standard cost method is used
 * @property String $PartItemDescription Part item description
 * @property Double $Quantity Quantity
 * @property Double $QuantityBatch Quantity batch
 * @property Time $syscreated Creation date
 * @property Guid $syscreator User ID of creator
 * @property Time $sysmodified Modified date
 * @property Guid $sysmodifier User ID of modifier
 * @property Int32 $Type Material type 1 indicates material, 2 indicates byproduct
 */
class BillOfMaterialMaterials extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ID';

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
        'Type'
    ];

    protected $url = 'manufacturing/BillOfMaterialMaterials';
}

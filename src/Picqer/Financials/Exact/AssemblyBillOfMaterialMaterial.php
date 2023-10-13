<?php

namespace Picqer\Financials\Exact;

/**
 * Class AssemblyBillOfMaterialMaterial.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryAssemblyBillOfMaterialMaterials
 *
 * @property string $ID Primary key
 * @property string $AssembledItem Main item
 * @property string $AssembledItemCode Main item code
 * @property string $AssembledItemDescription Main item description
 * @property int $AssembledLeadDays Main item assembly lead days
 * @property float $BatchQuantity Main item batch quantity
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property int $Division Division
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the modifier
 * @property string $PartItem Key of part item
 * @property string $PartItemCode Part item code
 * @property string $PartItemDescription Part item description
 * @property float $Quantity Quantity of the part item to produce main item
 * @property float $QuantityBatch Quantity of the part item to produce the batch
 * @property bool $UpdateCostPrice Indicates if cost price is updated
 * @property int $UseExplosion Indicates if main item assemble at delivery is used
 */
class AssemblyBillOfMaterialMaterial extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AssembledItem',
        'AssembledItemCode',
        'AssembledItemDescription',
        'AssembledLeadDays',
        'BatchQuantity',
        'Created',
        'Creator',
        'Division',
        'LineNumber',
        'Modified',
        'Modifier',
        'PartItem',
        'PartItemCode',
        'PartItemDescription',
        'Quantity',
        'QuantityBatch',
        'UpdateCostPrice',
        'UseExplosion',
    ];

    protected $url = 'inventory/AssemblyBillOfMaterialMaterials';
}

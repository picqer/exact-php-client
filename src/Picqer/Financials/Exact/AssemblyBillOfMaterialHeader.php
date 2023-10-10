<?php

namespace Picqer\Financials\Exact;

/**
 * Class AssemblyBillOfMaterialHeader.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryAssemblyBillOfMaterialHeader
 *
 * @property string $ID Primary key, it is an item ID
 * @property int $AssembledLeadDays Main item assembly lead days
 * @property AssemblyBillOfMaterialMaterial[] $AssemblyBillOfMaterialMaterials Collection of materials
 * @property float $BatchQuantity Quantity of the material needed to produce the batch
 * @property string $Code Item code
 * @property float $CostPrice Cost price of the item
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item
 * @property int $Division Division
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property bool $UpdateCostPrice Indicates if cost price is updated
 * @property int $UseExplosion Indicates if main item assemble at delivery is used
 */
class AssemblyBillOfMaterialHeader extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AssembledLeadDays',
        'AssemblyBillOfMaterialMaterials',
        'BatchQuantity',
        'Code',
        'CostPrice',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'UpdateCostPrice',
        'UseExplosion',
    ];

    protected $url = 'inventory/AssemblyBillOfMaterialHeader';
}

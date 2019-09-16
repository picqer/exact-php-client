<?php

namespace Picqer\Financials\Exact;

/**
 * Class ManufacturingSetting.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingManufacturingSettings
 *
 * @property int $Division This division.
 * @property int $InventoryMainMethod What is the division's main inventory method? Standard=3,Average=4
 * @property int $InventorySubMethod What is the division's sub inventory method? Perpetual=1,NonPerpetual=2,AngloSaxon=3
 * @property int $NegativeStockIsAllowed Does the current division allow negative stock?
 * @property int $SerialNumbersAreMandatory Are serial numbers mandatory in this division?
 * @property int $ShowBackflushMaterials Should ShopOrderMaterialPlans with Backflush=True be shown within Smart Shop Floor?
 * @property int $ShowSubOrderMaterials Should ShopOrderMaterialPlans linked to a SubOrder be shown within Smart Shop Floor?
 */
class ManufacturingSetting extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Division';

    protected $fillable = [
        'Division',
        'InventoryMainMethod',
        'InventorySubMethod',
        'NegativeStockIsAllowed',
        'SerialNumbersAreMandatory',
        'ShowBackflushMaterials',
        'ShowSubOrderMaterials',
    ];

    protected $url = 'manufacturing/ManufacturingSettings';
}

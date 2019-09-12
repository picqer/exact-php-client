<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderMaterialPlan
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderMaterialPlans
 *
 * @property string $ID Primary key
 * @property int $Backflush Indicates if this is a backflush step
 * @property int $CalculatorType Calculator type
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int $Division Division code
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
 * @property float $PlannedPriceFC Planned price of the material
 * @property float $PlannedQuantity Intended quantity
 * @property float $PlannedQuantityFactor Intended quantity unit factor
 * @property string $ShopOrder Reference to ShopOrders table
 * @property int $Status Line status
 * @property string $StatusDescription Description of Status
 * @property int $Type Type
 * @property string $Unit Unit
 * @property string $UnitDescription Unit description
 */
class ShopOrderMaterialPlan extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Backflush',
        'CalculatorType',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DetailDrawing',
        'Division',
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
        'PlannedPriceFC',
        'PlannedQuantity',
        'PlannedQuantityFactor',
        'ShopOrder',
        'Status',
        'StatusDescription',
        'Type',
        'Unit',
        'UnitDescription',
    ];

    protected $url = 'manufacturing/ShopOrderMaterialPlans';
}

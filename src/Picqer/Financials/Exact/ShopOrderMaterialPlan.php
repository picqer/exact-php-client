<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderMaterialPlan
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderMaterialPlans
 *
 * @property guid $ID Primary key
 * @property byte $Backflush Indicates if this is a backflush step
 * @property int32 $CalculatorType Calculator type
 * @property datetime $Created Creation date
 * @property guid $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the material
 * @property string $DetailDrawing Detail drawing reference
 * @property int32 $Division Division code
 * @property guid $Item Reference to Items table
 * @property string $ItemCode Item Code
 * @property string $ItemDescription Description of Item
 * @property string $ItemPictureUrl URL of the material item's picture
 * @property int32 $LineNumber Line number
 * @property datetime $Modified Last modified date
 * @property guid $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property double $PlannedAmountFC Planned amount in the currency of the transaction
 * @property datetime $PlannedDate Date that the material is required.
 * @property double $PlannedPriceFC Planned price of the material
 * @property double $PlannedQuantity Intended quantity
 * @property double $PlannedQuantityFactor Intended quantity unit factor
 * @property guid $ShopOrder Reference to ShopOrders table
 * @property int32 $Status Line status
 * @property string $StatusDescription Description of Status
 * @property int32 $Type Type
 * @property string $Unit Unit
 * @property string $UnitDescription Unit description
 */
class ShopOrderMaterialPlan extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ID';

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
        'UnitDescription'
    ];

    protected $url = 'manufacturing/ShopOrderMaterialPlans';
}
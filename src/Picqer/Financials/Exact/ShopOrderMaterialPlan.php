<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderMaterialPlan
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderMaterialPlans
 * 
 * @property Guid $ID Primary key
 * @property Byte $Backflush Indicates if this is a backflush step
 * @property Int32 $CalculatorType Calculator type
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the material
 * @property String $DetailDrawing Detail drawing reference
 * @property Int32 $Division Division code
 * @property Guid $Item Reference to Items table
 * @property String $ItemCode Item Code
 * @property String $ItemDescription Description of Item
 * @property String $ItemPictureUrl URL of the material item's picture
 * @property Int32 $LineNumber Line number
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Line notes
 * @property Double $PlannedAmountFC Planned amount in the currency of the transaction
 * @property DateTime $PlannedDate Date that the material is required.
 * @property Double $PlannedPriceFC Planned price of the material
 * @property Double $PlannedQuantity Intended quantity
 * @property Double $PlannedQuantityFactor Intended quantity unit factor
 * @property Guid $ShopOrder Reference to ShopOrders table
 * @property Int32 $Status Line status
 * @property String $StatusDescription Description of Status
 * @property Int32 $Type Type
 * @property String $Unit Unit
 * @property String $UnitDescription Unit description
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
        'UnitDescription'
    ];

    protected $url = 'manufacturing/ShopOrderMaterialPlans';

}

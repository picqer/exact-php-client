<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrders
 * 
 * @property Guid $ID Primary key
 * @property String $CADDrawingURL URL to CAD Drawing Specified on Manufacturing Bill of Material
 * @property String $Costcenter The cost center linked to the shop order
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit The cost unit linked to the shop order
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property DateTime $EntryDate Date on which the shop order was placed
 * @property Byte $IsBatch Does the material plan's item use batch numbers
 * @property Byte $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the material plan's item
 * @property Byte $IsInPlanning Indicator that Shop order is in planning
 * @property Byte $IsOnHold Indicator if the Shop order is on hold
 * @property Byte $IsReleased Indicator that the Shop order has been released to production
 * @property Byte $IsSerial Does the material plan's item use serial numbers
 * @property Guid $Item Reference to the item
 * @property String $ItemCode Code of the item created by this shop order
 * @property String $ItemDescription Description of the item created by this shop order
 * @property String $ItemPictureUrl URL of the item created by this shop order
 * @property Guid $ItemVersion Reference to ItemVersion
 * @property String $ItemVersionDescription Description of Item Version
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes - only viewed internally
 * @property DateTime $PlannedDate Planned end date of this shop order
 * @property Double $PlannedQuantity Planned quantity
 * @property DateTime $PlannedStartDate Planned start date of this shop order
 * @property Double $ProducedQuantity Produced quantity
 * @property Guid $Project Reference to Project
 * @property String $ProjectDescription Description of Project
 * @property Double $ReadyToShipQuantity Quantity ready to ship
 * @property SalesOrderLines $SalesOrderLines Collection of Sales order lines
 * @property Guid $ShopOrderMain Shop order main
 * @property Int32 $ShopOrderMainNumber Shop order main number
 * @property ShopOrderMaterialPlans $ShopOrderMaterialPlans Collection of Shop order Material plans
 * @property Int32 $ShopOrderNumber Unique number to indentify the shop order
 * @property String $ShopOrderNumberString Unique number to indentify the shop order (as a string to allow OData filtering, e.g. $filter=substringof('123',ShopOrderNumberString) eq true
 * @property Guid $ShopOrderParent Shop order parent
 * @property Int32 $ShopOrderParentNumber Shop order parent number
 * @property ShopOrderRoutingStepPlans $ShopOrderRoutingStepPlans Collection of Shop order Routing step plans
 * @property Int32 $Status Indicates the type of Shop Order: 10 Open, 20 In process, 30 Finished, 40 Completed
 * @property Int32 $Type Overall status of the line: 9040 Regular
 * @property String $Unit Unit of the item created by this shop order
 * @property String $UnitDescription Unit description of the unit of the item created by this shop order
 * @property Guid $Warehouse Reference to the Warehouse associated with the Shop order
 * @property String $YourRef Your reference (of the customer)
 */
class ShopOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CADDrawingURL',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EntryDate',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsInPlanning',
        'IsOnHold',
        'IsReleased',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'ItemVersion',
        'ItemVersionDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PlannedDate',
        'PlannedQuantity',
        'PlannedStartDate',
        'ProducedQuantity',
        'Project',
        'ProjectDescription',
        'ReadyToShipQuantity',
        'SalesOrderLines',
        'ShopOrderMain',
        'ShopOrderMainNumber',
        'ShopOrderMaterialPlans',
        'ShopOrderNumber',
        'ShopOrderNumberString',
        'ShopOrderParent',
        'ShopOrderParentNumber',
        'ShopOrderRoutingStepPlans',
        'Status',
        'Type',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'YourRef'
    ];

    protected $url = 'manufacturing/ShopOrders';

}

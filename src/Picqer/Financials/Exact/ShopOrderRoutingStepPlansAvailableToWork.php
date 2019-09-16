<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderRoutingStepPlansAvailableToWork.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadManufacturingShopOrderRoutingStepPlansAvailableToWork
 *
 * @property string $RoutingStep Routing Step ID
 * @property string $CustomerCode Customer code
 * @property int $CustomerCount Count of customers
 * @property string $CustomerName Customer name
 * @property int $DataType Type of data returned by query - for internal use
 * @property int $DateAscendingOrder Planned dates ascending order
 * @property int $DateDescendingOrder Planned dates descending order
 * @property string $ExtraDescription Extra description
 * @property bool $IsFractionAllowedItem Is fraction allowed item
 * @property bool $IsReleased Is released
 * @property bool $IsRunOperationFinished Is run operation finished
 * @property bool $IsSetupOperationFinished Is setup operation finished
 * @property string $Item Item
 * @property string $ItemCode Item code
 * @property int $ItemCodeAscendingOrder Shop order item code ascending order
 * @property int $ItemCodeDescendingOrder Shop order item code descending order
 * @property string $ItemDescription Item description
 * @property string $ItemVersion Item version ID
 * @property string $ItemVersionNotes Item version notes
 * @property int $LineNumber Sequence
 * @property int $Mode Mode of priority
 * @property string $Notes Shop order notes
 * @property string $Operation Operation
 * @property string $OperationCode Operation code
 * @property string $PictureThumbnailPath PictureThumbnailPath
 * @property string $PlannedDate Planned date
 * @property float $PlannedQuantity Planned quantity
 * @property float $PlannedSetupHours Planned setup hours
 * @property int $Priority Priority of the shop order
 * @property int $PriorityDescendingOrder Priority of the shop order
 * @property string $Project Shop order project
 * @property string $ProjectCode Shop order project code
 * @property string $ProjectDescription Project description
 * @property float $QuantityCompleted QuantityCompleted
 * @property string $RoutingStepDescription Routing step description
 * @property string $RoutingStepRealizationNotes RoutingStepRealizationNotes
 * @property int $RoutingStepStatus Routing step status
 * @property string $RoutingStepStatusDescription Routing step status description
 * @property string $RunStartTime Run start time
 * @property int $RunStatus Run timed status
 * @property string $RunTimedTimeTransaction Run timed time transaction
 * @property int $SalesOrderCount Count of Sales order
 * @property int $SalesOrderLineNumber Sales order line number
 * @property int $SalesOrderNumber Sales order number
 * @property float $SetupPercentComplete SetupPercentComplete
 * @property string $SetupStartTime Setup start time
 * @property int $SetupStatus Setup timed status
 * @property string $SetupTimedTimeTransaction Setup timed time transaction
 * @property string $ShopOrder Shop order ID
 * @property string $ShopOrderDescription Shop order description
 * @property int $ShopOrderNumber Shop order number
 * @property int $ShopOrderNumberAscendingOrder Shop order number ascending order
 * @property int $ShopOrderNumberDescendingOrder Shop order number descending order
 * @property int $ShopOrderStatus Shop order status
 * @property string $Unit Description of unit
 * @property string $Warehouse ID of warehouse where shop order is finished
 * @property string $Workcenter Workcenter
 * @property string $WorkcenterCode Workcenter code
 */
class ShopOrderRoutingStepPlansAvailableToWork extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'RoutingStep';

    protected $fillable = [
        'RoutingStep',
        'CustomerCode',
        'CustomerCount',
        'CustomerName',
        'DataType',
        'DateAscendingOrder',
        'DateDescendingOrder',
        'ExtraDescription',
        'IsFractionAllowedItem',
        'IsReleased',
        'IsRunOperationFinished',
        'IsSetupOperationFinished',
        'Item',
        'ItemCode',
        'ItemCodeAscendingOrder',
        'ItemCodeDescendingOrder',
        'ItemDescription',
        'ItemVersion',
        'ItemVersionNotes',
        'LineNumber',
        'Mode',
        'Notes',
        'Operation',
        'OperationCode',
        'PictureThumbnailPath',
        'PlannedDate',
        'PlannedQuantity',
        'PlannedSetupHours',
        'Priority',
        'PriorityDescendingOrder',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'QuantityCompleted',
        'RoutingStepDescription',
        'RoutingStepRealizationNotes',
        'RoutingStepStatus',
        'RoutingStepStatusDescription',
        'RunStartTime',
        'RunStatus',
        'RunTimedTimeTransaction',
        'SalesOrderCount',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'SetupPercentComplete',
        'SetupStartTime',
        'SetupStatus',
        'SetupTimedTimeTransaction',
        'ShopOrder',
        'ShopOrderDescription',
        'ShopOrderNumber',
        'ShopOrderNumberAscendingOrder',
        'ShopOrderNumberDescendingOrder',
        'ShopOrderStatus',
        'Unit',
        'Warehouse',
        'Workcenter',
        'WorkcenterCode',
    ];

    protected $url = 'read/manufacturing/ShopOrderRoutingStepPlansAvailableToWork';
}

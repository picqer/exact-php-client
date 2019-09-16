<?php

namespace Picqer\Financials\Exact;

/**
 * Class RecentTimeTransaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadManufacturingRecentTimeTransactions
 *
 * @property string $ID Primary key
 * @property string $CustomerCode Customer code
 * @property int $CustomerCount Count of customers
 * @property string $CustomerName Customer name
 * @property int $DataType Type of data returned by query - for internal use
 * @property string $Date Date of time entry
 * @property string $Employee ID of employee
 * @property string $EndTime Time that operation was stopped
 * @property int $HourStatus Hour Status of the time transaction: Rejected = 2, Submitted = 10, Approved = 20
 * @property int $IsFractionAllowedItem Is fraction allowed item
 * @property int $IsOperationFinished Is the operation finished?
 * @property string $Item Shop order make item
 * @property string $ItemCode Make item code
 * @property string $ItemPictureUrl Url to retrieve the item
 * @property string $ItemUnit Make item unit
 * @property float $LaborHours Adjustable labor hours
 * @property float $MachineHours Adjustable machine hours
 * @property string $Modified Modified date
 * @property string $Notes Notes - viewable in data collection
 * @property string $Operation Routing step operation
 * @property string $OperationCode Routing step operation code
 * @property float $PercentComplete Percentage of operation completed within time period
 * @property float $ProducedQuantity Quantity of make item produced within time period
 * @property string $Project Project ID of the shop order
 * @property string $ProjectCode Project code of the shop order
 * @property string $ProjectDescription Project description of the shop order
 * @property int $SalesOrderCount Count of Sales order
 * @property int $SalesOrderLineNumber Sales order line number
 * @property int $SalesOrderNumber Sales order number
 * @property string $ShopOrder Shop order
 * @property string $ShopOrderDescription Shop order description
 * @property int $ShopOrderNumber Shop order number
 * @property float $ShopOrderPlannedQuantity Shop order planned quantity
 * @property string $ShopOrderRoutingStepPlan Shop order routing step where work occurred
 * @property float $ShopOrderRoutingStepPlanAttendedPercentage Percentage of time attended on the routing step plan
 * @property string $ShopOrderRoutingStepPlanDescription Description of the shop order routing step where work occurred
 * @property string $StartTime Time that operation was started
 * @property int $Status Status of the time transaction
 * @property int $Type Type of the time transaction: Setup = 10, Run = 20
 * @property string $Warehouse ID of warehouse where shop order is finished
 * @property string $Workcenter Work center where work occurred
 * @property string $WorkcenterCode Work center code
 */
class RecentTimeTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CustomerCode',
        'CustomerCount',
        'CustomerName',
        'DataType',
        'Date',
        'Employee',
        'EndTime',
        'HourStatus',
        'IsFractionAllowedItem',
        'IsOperationFinished',
        'Item',
        'ItemCode',
        'ItemPictureUrl',
        'ItemUnit',
        'LaborHours',
        'MachineHours',
        'Modified',
        'Notes',
        'Operation',
        'OperationCode',
        'PercentComplete',
        'ProducedQuantity',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'SalesOrderCount',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'ShopOrder',
        'ShopOrderDescription',
        'ShopOrderNumber',
        'ShopOrderPlannedQuantity',
        'ShopOrderRoutingStepPlan',
        'ShopOrderRoutingStepPlanAttendedPercentage',
        'ShopOrderRoutingStepPlanDescription',
        'StartTime',
        'Status',
        'Type',
        'Warehouse',
        'Workcenter',
        'WorkcenterCode',
    ];

    protected $url = 'read/manufacturing/RecentTimeTransactions';
}

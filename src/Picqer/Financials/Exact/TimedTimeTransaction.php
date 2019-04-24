<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimedTimeTransaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingTimedTimeTransactions
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Employee ID of employee
 * @property string $EmployeeFullName Name of employee
 * @property string $EndTime Time that operation was stopped
 * @property int $IsOperationFinished Is the operation finished?
 * @property float $LaborHours Adjustable labor hours
 * @property float $MachineHours Adjustable machine hours
 * @property string $Modified Modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes - viewable in data collection
 * @property string $Operation ID of operation
 * @property string $OperationCode Code of operation
 * @property string $OperationDescription Description of operation
 * @property float $PercentComplete Percentage of operation completed within time period
 * @property float $ProducedQuantity Quantity of make item produced within time period
 * @property string $ProductionArea Production area of the work center
 * @property string $ProductionAreaCode Code of production area of the work center
 * @property string $ProductionAreaDescription Description of production area of the work center
 * @property string $ShopOrder ID of shop order
 * @property string $ShopOrderDescription Description of shop order
 * @property int $ShopOrderNumber Number of shop order
 * @property string $ShopOrderRoutingStepPlan Shop order routing step where work occurred
 * @property string $ShopOrderRoutingStepPlanDescription Description of the routing step plan
 * @property float $ShopOrderRoutingStepPlanRemainingRunHours Remaining planned run hours of the routing step plan
 * @property float $ShopOrderRoutingStepPlanRemainingSetupHours Remaining planned setup hours of the routing step plan
 * @property int $Source Source of the timed time transaction
 * @property string $StartTime Time that operation was started
 * @property int $Status Status of the timed time transaction
 * @property int $Type Type of the timed time transaction: Setup = 10, Run = 20
 * @property string $Workcenter Work center where work occurred
 * @property string $WorkcenterCode Code of the work center
 * @property string $WorkcenterDescription Description of the work center
 */
class TimedTimeTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EndTime',
        'IsOperationFinished',
        'LaborHours',
        'MachineHours',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Operation',
        'OperationCode',
        'OperationDescription',
        'PercentComplete',
        'ProducedQuantity',
        'ProductionArea',
        'ProductionAreaCode',
        'ProductionAreaDescription',
        'ShopOrder',
        'ShopOrderDescription',
        'ShopOrderNumber',
        'ShopOrderRoutingStepPlan',
        'ShopOrderRoutingStepPlanDescription',
        'ShopOrderRoutingStepPlanRemainingRunHours',
        'ShopOrderRoutingStepPlanRemainingSetupHours',
        'Source',
        'StartTime',
        'Status',
        'Type',
        'Workcenter',
        'WorkcenterCode',
        'WorkcenterDescription',
    ];

    protected $url = 'manufacturing/TimedTimeTransactions';
}

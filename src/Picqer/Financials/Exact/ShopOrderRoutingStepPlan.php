<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderRoutingStepPlan
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderRoutingStepPlans
 *
 * @property guid $ID Primary key
 * @property guid $Account Reference to Account providing the Outsourced item
 * @property string $AccountName Account name
 * @property string $AccountNumber Account number
 * @property double $AttendedPercentage Attended Percentage
 * @property byte $Backflush Indicates if this is a backflush step
 * @property double $CostPerItem Total cost / Shop order planned quantity
 * @property datetime $Created Creation date
 * @property guid $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the operation
 * @property int32 $Division Division code
 * @property double $EfficiencyPercentage Efficiency Percentage
 * @property int32 $FactorType Conversion factor type between Shop order Item and Subcontract purchase Unit
 * @property int32 $LineNumber Sequential order of the operation
 * @property datetime $Modified Last modified date
 * @property guid $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property guid $Operation Reference to Operations
 * @property string $OperationCode Code of the routing step operation
 * @property string $OperationDescription Description of the operation step
 * @property guid $OperationResource Reference to OperationResources
 * @property datetime $PlannedEndDate Planned end date
 * @property double $PlannedRunHours Planned run hours
 * @property double $PlannedSetupHours Planned setup hours
 * @property datetime $PlannedStartDate Planned start date
 * @property double $PlannedTotalHours Setup hours + Run hours
 * @property string $PurchaseUnit Reference to Units
 * @property double $PurchaseUnitFactor Purchase Unit Factor
 * @property double $PurchaseUnitPriceFC Purchase Unit Price in the currency of the transaction
 * @property double $PurchaseUnitQuantity Purchase unit quantity of the plan
 * @property int32 $RoutingStepType Reference to RoutingStepTypes
 * @property double $Run Used in conjunction with RunMethod, and EfficiencyPercentage to determine PlannedRunHours
 * @property int32 $RunMethod Reference to OperationMethod
 * @property string $RunMethodDescription Description of RunMethod
 * @property double $Setup Used in conjunction with SetupCount and Setup Unit to determine PlannedSetupHours
 * @property string $SetupUnit Reference to TimeUnits
 * @property guid $ShopOrder Reference to Shop orders
 * @property int32 $Status Reference to OperationStatus
 * @property string $StatusDescription Description of Status
 * @property int32 $SubcontractedLeadDays Subcontracted lead days
 * @property transactions $TimeTransactions Collection of TimeTransactions
 * @property double $TotalCostDC Total cost of the routing line
 * @property guid $Workcenter Reference to Workcenters
 * @property string $WorkcenterCode Workcenter code
 * @property string $WorkcenterDescription Workcenter description
 */
class ShopOrderRoutingStepPlan extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'AccountNumber',
        'AttendedPercentage',
        'Backflush',
        'CostPerItem',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EfficiencyPercentage',
        'FactorType',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Operation',
        'OperationCode',
        'OperationDescription',
        'OperationResource',
        'PlannedEndDate',
        'PlannedRunHours',
        'PlannedSetupHours',
        'PlannedStartDate',
        'PlannedTotalHours',
        'PurchaseUnit',
        'PurchaseUnitFactor',
        'PurchaseUnitPriceFC',
        'PurchaseUnitQuantity',
        'RoutingStepType',
        'Run',
        'RunMethod',
        'RunMethodDescription',
        'Setup',
        'SetupUnit',
        'ShopOrder',
        'Status',
        'StatusDescription',
        'SubcontractedLeadDays',
        'TimeTransactions',
        'TotalCostDC',
        'Workcenter',
        'WorkcenterCode',
        'WorkcenterDescription',
    ];

    protected $url = 'manufacturing/ShopOrderRoutingStepPlans';
}
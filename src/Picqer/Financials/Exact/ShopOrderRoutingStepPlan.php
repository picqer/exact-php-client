<?php namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderRoutingStepPlan
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderRoutingStepPlans
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Reference to Account providing the Outsourced item
 * @property String $AccountName Account name
 * @property String $AccountNumber Account number
 * @property Double $AttendedPercentage Attended Percentage
 * @property Byte $Backflush Indicates if this is a backflush step
 * @property Double $CostPerItem Total cost / Shop order planned quantity
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the operation
 * @property Int32 $Division Division code
 * @property Double $EfficiencyPercentage Efficiency Percentage
 * @property Int32 $FactorType Conversion factor type between Shop order Item and Subcontract purchase Unit
 * @property Int32 $LineNumber Sequential order of the operation
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 * @property Guid $Operation Reference to Operations
 * @property String $OperationCode Code of the routing step operation
 * @property String $OperationDescription Description of the operation step
 * @property Guid $OperationResource Reference to OperationResources
 * @property DateTime $PlannedEndDate Planned end date
 * @property Double $PlannedRunHours Planned run hours
 * @property Double $PlannedSetupHours Planned setup hours
 * @property DateTime $PlannedStartDate Planned start date
 * @property Double $PlannedTotalHours Setup hours + Run hours
 * @property String $PurchaseUnit Reference to Units
 * @property Double $PurchaseUnitFactor Purchase Unit Factor
 * @property Double $PurchaseUnitPriceFC Purchase Unit Price in the currency of the transaction
 * @property Double $PurchaseUnitQuantity Purchase unit quantity of the plan
 * @property Int32 $RoutingStepType Reference to RoutingStepTypes
 * @property Double $Run Used in conjunction with RunMethod, and EfficiencyPercentage to determine PlannedRunHours
 * @property Int32 $RunMethod Reference to OperationMethod
 * @property String $RunMethodDescription Description of RunMethod
 * @property Double $Setup Used in conjunction with SetupCount and Setup Unit to determine PlannedSetupHours
 * @property String $SetupUnit Reference to TimeUnits
 * @property Guid $ShopOrder Reference to Shop orders
 * @property Int32 $Status Reference to OperationStatus
 * @property String $StatusDescription Description of Status
 * @property Int32 $SubcontractedLeadDays Subcontracted lead days
 * @property TimeTransactions $TimeTransactions Collection of TimeTransactions
 * @property Double $TotalCostDC Total cost of the routing line
 * @property Guid $Workcenter Reference to Workcenters
 * @property String $WorkcenterCode Workcenter code
 * @property String $WorkcenterDescription Workcenter description
 */
class ShopOrderRoutingStepPlan extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'WorkcenterDescription'
    ];

    protected $url = 'manufacturing/ShopOrderRoutingStepPlans';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class BillOfMaterialRouting.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialRoutings
 *
 * @property string $ID Primary key
 * @property string $Account Reference to Account providing the Outsourced item
 * @property float $AttendedPercentage Attended Percentage
 * @property int $Backflush Indicates if this is a backflush step
 * @property float $CostPerItem Total cost / Batch quantity
 * @property string $CreatedBy User ID of creator
 * @property string $CreatedDate Creation date
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency
 * @property int $Division Division code
 * @property float $EfficiencyPercentage Efficiency Percentage
 * @property int $FactorType Conversion factor type between produced item and Subcontract purchase Unit
 * @property float $GeneralBurden General Burden
 * @property string $Item Reference to Items
 * @property string $ItemVersion Reference to Item versions
 * @property int $LineNumber Sequential order of the operation
 * @property float $MachineBurden Machine Burden
 * @property string $ModifiedBy User ID of modifier
 * @property string $ModifiedDate Modification date
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property string $Operation Reference to Operations
 * @property string $OperationDescription Description of the operation step
 * @property string $OperationResource Reference to OperationResources
 * @property string $PurchaseUnit Reference to Units
 * @property float $PurchaseUnitFactor Purchase Unit Factor
 * @property float $PurchaseUnitPriceFC Purchase Unit Price in the currency of the transaction
 * @property float $PurchaseUnitQuantity Purchase unit quantity of the plan
 * @property float $RateFC Rate FC
 * @property string $ResourceDescription Resource Description
 * @property int $RoutingStepType Reference to RoutingStepTypes (10-Work center, 20-Supplier)
 * @property float $Run Used in conjunction with RunMethod, and EfficiencyPercentage to determine PlannedRunHours
 * @property float $RunLabor Run Labor
 * @property float $RunLaborBurden Run Labor Burden
 * @property int $RunMethod Reference to OperationMethod (10-Fixed Hours, 20-Fixed Minutes, 25-Fixed Days, 30-Hours/Item, 40-Minutes/Item, 50-Seconds/Item, 60-Items/Hour, 70-Items/Minute)
 * @property float $Setup Used in conjunction with SetupCount and Setup Unit to determine PlannedSetupHours
 * @property float $SetupLabor Setup Labor
 * @property float $SetupLaborBurden Setup Labor Burden
 * @property string $SetupUnit Reference to TimeUnits
 * @property int $SubcontractedLeadDays Subcontracted lead days
 * @property float $TotalCostDC Total cost of the routing line
 * @property string $Workcenter Reference to Workcenters
 */
class BillOfMaterialRouting extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AttendedPercentage',
        'Backflush',
        'CostPerItem',
        'CreatedBy',
        'CreatedDate',
        'CreatorFullName',
        'Currency',
        'Division',
        'EfficiencyPercentage',
        'FactorType',
        'GeneralBurden',
        'Item',
        'ItemVersion',
        'LineNumber',
        'MachineBurden',
        'ModifiedBy',
        'ModifiedDate',
        'ModifierFullName',
        'Notes',
        'Operation',
        'OperationDescription',
        'OperationResource',
        'PurchaseUnit',
        'PurchaseUnitFactor',
        'PurchaseUnitPriceFC',
        'PurchaseUnitQuantity',
        'RateFC',
        'ResourceDescription',
        'RoutingStepType',
        'Run',
        'RunLabor',
        'RunLaborBurden',
        'RunMethod',
        'Setup',
        'SetupLabor',
        'SetupLaborBurden',
        'SetupUnit',
        'SubcontractedLeadDays',
        'TotalCostDC',
        'Workcenter',
    ];

    protected $url = 'manufacturing/BillOfMaterialRoutings';
}

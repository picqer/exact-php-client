<?php

namespace Picqer\Financials\Exact;

/**
 * Class OperationResource.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingOperationResources
 *
 * @property string $ID Primary key
 * @property string $Account Reference to Accounts
 * @property float $AttendedPercentage Attended percentage
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Reference to Currencies
 * @property int $Division Division code
 * @property float $EfficiencyPercentage Efficiency percentage
 * @property int $IsPrimary Indicates if this is the primary operation of the workcenter
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Operation Reference to Operations
 * @property string $OperationDescription Description of Operation
 * @property int $PurchaseLeadDays Lead days from purchase
 * @property string $PurchaseUnit Unit of purchased item from supplier
 * @property string $PurchaseVATCode VAT code used for purchased item from supplier
 * @property float $Run Used in conjuction with RunMethod and EfficiencyPercentage to determine PlannedRunHours
 * @property int $RunMethod Reference to OperationRunMethods
 * @property float $Setup Used in conjunction with SetupCount and SetupUnit to determine PlannedSetupHours
 * @property string $SetupUnit Reference to TimeUnits
 * @property int $Type Reference to RoutingStepTypes
 * @property string $Workcenter Reference to Workcenter
 * @property string $WorkcenterDescription Description of Workcenter
 */
class OperationResource extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AttendedPercentage',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Division',
        'EfficiencyPercentage',
        'IsPrimary',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Operation',
        'OperationDescription',
        'PurchaseLeadDays',
        'PurchaseUnit',
        'PurchaseVATCode',
        'Run',
        'RunMethod',
        'Setup',
        'SetupUnit',
        'Type',
        'Workcenter',
        'WorkcenterDescription',
    ];

    protected $url = 'manufacturing/OperationResources';
}

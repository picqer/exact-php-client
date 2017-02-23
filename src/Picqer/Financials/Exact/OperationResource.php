<?php namespace Picqer\Financials\Exact;

/**
 * Class OperationResource
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingOperationResources
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Reference to Accounts
 * @property Double $AttendedPercentage Attended percentage
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Reference to Currencies
 * @property Int32 $Division Division code
 * @property Double $EfficiencyPercentage Efficiency percentage
 * @property Byte $IsPrimary Indicates if this is the primary operation of the workcenter
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $Operation Reference to Operations
 * @property String $OperationDescription Description of Operation
 * @property Int32 $PurchaseLeadDays Lead days from purchase
 * @property String $PurchaseUnit Unit of purchased item from supplier
 * @property String $PurchaseVATCode VAT code used for purchased item from supplier
 * @property Double $Run Used in conjuction with RunMethod and EfficiencyPercentage to determine PlannedRunHours
 * @property Int32 $RunMethod Reference to OperationRunMethods
 * @property Double $Setup Used in conjunction with SetupCount and SetupUnit to determine PlannedSetupHours
 * @property String $SetupUnit Reference to TimeUnits
 * @property Int32 $Type Reference to RoutingStepTypes
 * @property Guid $Workcenter Reference to Workcenter
 * @property String $WorkcenterDescription Description of Workcenter
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
        'WorkcenterDescription'
    ];

    protected $url = 'manufacturing/OperationResources';

}

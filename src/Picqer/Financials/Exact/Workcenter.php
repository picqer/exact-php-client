<?php

namespace Picqer\Financials\Exact;

/**
 * Class Workcenter.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingWorkcenters
 *
 * @property string $ID Primary key
 * @property int $Capacity Capacity of the work center
 * @property string $Code Code of the work center
 * @property string $Costcenter Reference to CostCenters
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Reference to CostUnits
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the work center
 * @property int $Division Division code
 * @property float $GeneralBurdenRate General burden rate
 * @property int $IsLaborBurdenPercent Indicates if labor burden is calculated as a percentage or amount
 * @property float $LaborBurdenRate Labor burden rate
 * @property float $MachineBurdenRate Machine burden rate
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Remarks
 * @property string $ProductionArea Area to which the work center belongs.
 * @property float $RunLaborRate Run labor rate
 * @property string $SearchCode Search code of the work center
 * @property float $SetupLaborRate Setup labor rate
 * @property int $Status Reference to WorkcenterStatus
 * @property int $Type Reference to WorkcenterTypes
 */
class Workcenter extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Capacity',
        'Code',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'GeneralBurdenRate',
        'IsLaborBurdenPercent',
        'LaborBurdenRate',
        'MachineBurdenRate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'ProductionArea',
        'RunLaborRate',
        'SearchCode',
        'SetupLaborRate',
        'Status',
        'Type',
    ];

    protected $url = 'manufacturing/Workcenters';
}

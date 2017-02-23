<?php namespace Picqer\Financials\Exact;

/**
 * Class Workcenter
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingWorkcenters
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the work center
 * @property String $Costcenter Reference to CostCenters
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit Reference to CostUnits
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the work center
 * @property Int32 $Division Division code
 * @property Double $GeneralBurdenRate General burden rate
 * @property Byte $IsLaborBurdenPercent Indicates if labor burden is calculated as a percentage or amount
 * @property Double $LaborBurdenRate Labor burden rate
 * @property Double $MachineBurdenRate Machine burden rate
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Remarks
 * @property Guid $ProductionArea Area to which the work center belongs.
 * @property Double $RunLaborRate Run labor rate
 * @property String $SearchCode Search code of the work center
 * @property Double $SetupLaborRate Setup labor rate
 * @property Int32 $Status Reference to WorkcenterStatus
 * @property Int32 $Type Reference to WorkcenterTypes
 */
class Workcenter extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
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
        'Type'
    ];

    protected $url = 'manufacturing/Workcenters';

}

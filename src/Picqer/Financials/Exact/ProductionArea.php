<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProductionArea
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingProductionAreas
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the production area group
 * @property String $Costcenter Reference to Cost center
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit Reference to Cost unit
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the production area
 * @property Int32 $Division Division code
 * @property Byte $IsDefault Indicates if this is the default production area. This will be used when creating a new production area
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Production area notes
 */
class ProductionArea extends Model
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
        'IsDefault',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes'
    ];

    protected $url = 'manufacturing/ProductionAreas';

}

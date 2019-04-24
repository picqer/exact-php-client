<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProductionArea.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingProductionAreas
 *
 * @property string $ID Primary key
 * @property string $Code Code of the production area group
 * @property string $Costcenter Reference to Cost center
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Reference to Cost unit
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the production area
 * @property int $Division Division code
 * @property int $IsDefault Indicates if this is the default production area. This will be used when creating a new production area
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Production area notes
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
        'Notes',
    ];

    protected $url = 'manufacturing/ProductionAreas';
}

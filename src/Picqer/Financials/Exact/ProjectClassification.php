<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectClassification.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectClassifications
 *
 * @property string $ID Primary key
 * @property string $Code Code
 * @property string $CostCenter Cost Center linked to the project classification
 * @property string $CostCenterDescription Description of Costcenter
 * @property string $CostUnit Cost unit linked to the project classification
 * @property string $CostUnitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the project classification
 * @property int $Division Division code
 * @property string $DivisionName Name of Division
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property bool $UseEmployeeCostCenter Indicates whether to use employee cost center and cost unit
 */
class ProjectClassification extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'DivisionName',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'UseEmployeeCostCenter',
    ];

    protected $url = 'project/ProjectClassifications';
}

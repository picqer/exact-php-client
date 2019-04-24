<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectHourBudget.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectHourBudgets
 *
 * @property string $ID Primary key
 * @property float $Budget Number of hours
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division number
 * @property string $Item Hour type of budget
 * @property string $ItemCode Code of hour type
 * @property string $ItemDescription Description of hour type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Project Reference to project
 * @property string $ProjectCode Code of project
 * @property string $ProjectDescription Description of project
 */
class ProjectHourBudget extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Budget',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Project',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'project/ProjectHourBudgets';
}

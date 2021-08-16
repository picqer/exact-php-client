<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectHourBudget.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectHourBudgets
 *
 * @property string $ID Primary key
 * @property float $Budget Number of hours to be budgeted to a project
 * @property string $Created Date and time when the project hour budget was created
 * @property string $Creator ID of user that created the project hour budget
 * @property string $CreatorFullName Full name of user that created the project hour budget
 * @property int $Division Division number
 * @property string $Item ID of hour type of budget
 * @property string $ItemCode Code of hour type
 * @property string $ItemDescription Description of hour type
 * @property string $Modified Last modified date of project hour budget
 * @property string $Modifier ID of last user that modified the project hour budget
 * @property string $ModifierFullName Full name of last user that modified the project hour budget
 * @property string $Project Project ID that the budgeted hours is referenced to
 * @property string $ProjectCode Project code that the budgeted hours is referenced to
 * @property string $ProjectDescription Project description that the budgeted hours is referenced to
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

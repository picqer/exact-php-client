<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProjectHourBudget
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectHourBudgets
 * 
 * @property Guid $ID Primary key
 * @property Double $Budget Number of hours
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division number
 * @property Guid $Item Hour type of budget
 * @property String $ItemCode Code of hour type
 * @property String $ItemDescription Description of hour type
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Guid $Project Reference to project
 * @property String $ProjectCode Code of project
 * @property String $ProjectDescription Description of project
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
        'ProjectDescription'
    ];

    protected $url = 'project/ProjectHourBudgets';

}

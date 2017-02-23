<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionEmployee
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionEmployees
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Date created
 * @property Guid $Creator Creator user ID
 * @property String $CreatorFullName Creator name
 * @property Int32 $Division Division code
 * @property Guid $Employee Employee linked to the restriction
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Readable ID of the employee
 * @property DateTime $Modified Date modified
 * @property Guid $Modifier Modifier user ID
 * @property String $ModifierFullName Modifier name
 * @property Guid $Project Project linked to the restriction
 * @property String $ProjectCode Project code
 * @property String $ProjectDescription Project description
 */
class ProjectRestrictionEmployee extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Project',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'project/ProjectRestrictionEmployees';

}

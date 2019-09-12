<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionEmployee
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionEmployees
 *
 * @property string $ID Primary key
 * @property string $Created Date created
 * @property string $Creator Creator user ID
 * @property string $CreatorFullName Creator name
 * @property int $Division Division code
 * @property string $Employee Employee linked to the restriction
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Readable ID of the employee
 * @property string $Modified Date modified
 * @property string $Modifier Modifier user ID
 * @property string $ModifierFullName Modifier name
 * @property string $Project Project linked to the restriction
 * @property string $ProjectCode Project code
 * @property string $ProjectDescription Project description
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
        'ProjectDescription',
    ];

    protected $url = 'project/ProjectRestrictionEmployees';
}

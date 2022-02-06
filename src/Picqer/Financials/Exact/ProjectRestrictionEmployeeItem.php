<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionEmployeeItem.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionEmployeeItems
 *
 * @property string $ID Primary key
 * @property string $Created Date and time when the project restriction was created
 * @property string $Creator ID of user that created the project restriction
 * @property string $CreatorFullName Full name of user that created the project restriction
 * @property int $Division Division of project and project restriction
 * @property string $Employee The guid ID of the employee restricted to the project for hour entry
 * @property string $EmployeeFullName The full name in string of the employee restricted to the project for hour entry
 * @property int $EmployeeHID The HID of the employee restricted to the project for hour entry
 * @property string $Item ID of item that linked to the project restriction
 * @property string $ItemCode Code of item that linked to the project restriction
 * @property string $ItemDescription Description of item that linked to the project restriction
 * @property int $ItemIsTime Indicates if the item is a time unit item
 * @property string $Modified Last date when the project restriction was modified
 * @property string $Modifier ID of user that modified the project restriction
 * @property string $ModifierFullName Full name of user that modified the project restriction
 * @property string $Project Project ID that the restriction is referenced to
 * @property string $ProjectCode Project code that the restriction is referenced to
 * @property string $ProjectDescription Project description that the restriction is referenced to
 */
class ProjectRestrictionEmployeeItem extends Model
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
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemIsTime',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Project',
        'ProjectCode',
        'ProjectDescription',
    ];

    protected $url = 'project/ProjectRestrictionEmployeeItems';
}

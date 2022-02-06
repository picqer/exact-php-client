<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmployeeRestrictionItem.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectEmployeeRestrictionItems
 *
 * @property string $ID Primary key
 * @property string $Created Date and time when the employee restriction was created
 * @property string $Creator ID of user that created the employee restriction
 * @property string $CreatorFullName Full name of user that created the employee restriction
 * @property int $Division Division of employee restriction
 * @property string $Employee ID of the employee that linked to the employee restriction
 * @property string $EmployeeFullName Full name in string of the employee
 * @property int $EmployeeHID Employee HID of the employee
 * @property string $Item ID of item that linked to the employee restriction
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property int $ItemIsTime Indicates if the item is a time unit item
 * @property string $Modified Last date when the employee restriction was modified
 * @property string $Modifier ID of user that modified the employee restriction
 * @property string $ModifierFullName Full name of user that modified the employee restriction
 */
class EmployeeRestrictionItem extends Model
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
    ];

    protected $url = 'project/EmployeeRestrictionItems';
}

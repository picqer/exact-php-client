<?php

namespace Picqer\Financials\Exact;

/**
 * Class UserRole.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=UsersUserRoles
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Description
 * @property string $EndDate Indicates the date and time when te role becomes inactive for the user
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property int $Role The role that the user is linked to
 * @property int $RoleLevel Rolelevel sets the level on which a role for a user is active. This can be: 1 = Database, 2 = Customer, 3 = Division, 100 = Transferred to accountant
 * @property string $StartDate Indicates the date when the role becomes active for the user
 * @property string $UserID The user that is linked to the role
 */
class UserRole extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Role',
        'RoleLevel',
        'StartDate',
        'UserID',
    ];

    protected $url = 'users/UserRoles';
}

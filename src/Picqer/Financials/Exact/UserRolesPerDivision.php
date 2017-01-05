<?php namespace Picqer\Financials\Exact;

/**
 * Class UserRolesPerDivision
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=UsersUserRolesPerDivision
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property DateTime $EndDate Indicates the date and time when te role becomes inactive for the user
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property Int32 $Role The role that the user is linked to
 * @property Int32 $RoleLevel Rolelevel sets the level on which a role for a user is active. This can be: 1 = Database, 2 = Customer, 3 = Division, 100 = Transferred to accountant
 * @property DateTime $StartDate Indicates the date when the role becomes active for the user
 * @property Guid $UserID The user that is linked to the role
 */
class UserRolesPerDivision extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Role',
        'RoleLevel',
        'StartDate',
        'UserID'
    ];

    protected $url = 'users/UserRolesPerDivision';

}

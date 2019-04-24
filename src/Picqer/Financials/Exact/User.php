<?php

namespace Picqer\Financials\Exact;

/**
 * Class User.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=UsersUsers
 *
 * @property string $UserID Primary key
 * @property string $BirthDate Birth date
 * @property string $BirthName Birth name
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Customer Customer the user belongs to
 * @property string $CustomerName Name of Customer
 * @property string $Email Email address of the user
 * @property string $EndDate Date after which the user login is disabled. NULL means no enddate
 * @property string $FirstName First name
 * @property string $FullName Full name of the user
 * @property string $Gender Gender: M=Male, V=Female, O=Unknown
 * @property bool $HasRegisteredForTwoStepVerification User has completed registration of Two-Step verification
 * @property bool $HasTwoStepVerification User must use Two-Step verification to log in
 * @property string $Initials Initials
 * @property int $IsAnonymised Indicates whether the user is anonymised.
 * @property string $Language Language (culture) that is used in Exact Online
 * @property string $LastLogin The last time this user logged in
 * @property string $LastName Last name
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phone
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Nationality Nationality
 * @property string $Notes Remarks
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extension
 * @property string $ProfileCode Profile code
 * @property string $StartDate Startdate after which the login is allowed. If the start date is NULL the login is allowed as well
 * @property int $StartDivision Start Division
 * @property string $Title Title
 * @property string $UserName Login name of the user
 * @property UserRoles $UserRoles Collection of user roles
 * @property UserRolesPerDivision $UserRolesPerDivision Collection of user roles per division
 * @property string $UserTypesList Obsolete
 */
class User extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'UserID';

    protected $fillable = [
        'UserID',
        'BirthDate',
        'BirthName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Customer',
        'CustomerName',
        'Email',
        'EndDate',
        'FirstName',
        'FullName',
        'Gender',
        'HasRegisteredForTwoStepVerification',
        'HasTwoStepVerification',
        'Initials',
        'IsAnonymised',
        'Language',
        'LastLogin',
        'LastName',
        'MiddleName',
        'Mobile',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Nationality',
        'Notes',
        'Phone',
        'PhoneExtension',
        'ProfileCode',
        'StartDate',
        'StartDivision',
        'Title',
        'UserName',
        'UserRoles',
        'UserRolesPerDivision',
        'UserTypesList',
    ];

    protected $url = 'users/Users';
}

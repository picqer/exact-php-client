<?php

namespace Picqer\Financials\Exact;

/**
 * Class User
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=UsersUsers
 *
 * @property Guid $UserID Primary key
 * @property DateTime $BirthDate Birth date
 * @property String $BirthName Birth name
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Guid $Customer Customer the user belongs to
 * @property String $CustomerName Name of Customer
 * @property String $Email Email address of the user
 * @property DateTime $EndDate Date after which the user login is disabled. NULL means no enddate
 * @property String $FirstName First name
 * @property String $FullName Full name of the user
 * @property String $Gender Gender: M=Male, V=Female, O=Unknown
 * @property Boolean $HasRegisteredForTwoStepVerification User has completed registration of Two-Step verification
 * @property Boolean $HasTwoStepVerification User must use Two-Step verification to log in
 * @property String $Initials Initials
 * @property Byte $IsAnonymised Indicates whether the user is anonymised.
 * @property String $Language Language (culture) that is used in Exact Online
 * @property DateTime $LastLogin The last time this user logged in
 * @property String $LastName Last name
 * @property String $MiddleName Middle name
 * @property String $Mobile Mobile phone
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Nationality Nationality
 * @property String $Notes Remarks
 * @property String $Phone Phone number
 * @property String $PhoneExtension Phone number extension
 * @property String $ProfileCode Profile code
 * @property DateTime $StartDate Startdate after which the login is allowed. If the start date is NULL the login is allowed as well
 * @property Int32 $StartDivision Start Division
 * @property String $Title Title
 * @property String $UserName Login name of the user
 * @property UserRoles $UserRoles Collection of user roles
 * @property UserRolesPerDivision $UserRolesPerDivision Collection of user roles per division
 * @property String $UserTypesList Obsolete
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

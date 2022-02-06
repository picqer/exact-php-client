<?php

namespace Picqer\Financials\Exact;

/**
 * Class SystemUser.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemUsers
 *
 * @property string $UserID Primary key
 * @property int $AuthenticationType Authentication Type: 2=Forms, 8=Totp, 16=Auth0FederatedSSO, 32=Auth0Login, 64=B2CFederatedLogin, 128=B2CLogin. It is a bitwise enumerator, e.g. Forms + Totp = 10
 * @property string $BirthDate Birth date
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
 * @property bool $IsAnonymised Indicates whether the user is anonymised.
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
 * @property string $Title Title
 * @property string $UserDivisionList User Division List - CSV format
 * @property string $UserName Login name of the user
 * @property string $UserTypeCode User type code
 */
class SystemUser extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'UserID';

    protected $fillable = [
        'UserID',
        'AuthenticationType',
        'BirthDate',
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
        'Title',
        'UserDivisionList',
        'UserName',
        'UserTypeCode',
    ];

    protected $url = 'system/Users';
}

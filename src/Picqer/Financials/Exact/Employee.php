<?php

namespace Picqer\Financials\Exact;

/**
 * Class Employee.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmployees
 *
 * @property string $ID Primary key
 * @property int $ActiveEmployment Obsolete
 * @property string $AddressLine2 Second address line
 * @property string $AddressLine3 Third address line
 * @property string $AddressStreet Street of address
 * @property string $AddressStreetNumber Street number of address
 * @property string $AddressStreetNumberSuffix Street number suffix of address
 * @property string $BirthDate Birth date
 * @property string $BirthName Birth name
 * @property string $BirthNamePrefix Birth middle name
 * @property string $BirthPlace Birth place
 * @property string $BusinessEmail Email of the employee at the office
 * @property string $BusinessFax Fax number of the employee at the office
 * @property string $BusinessMobile Office mobile number of the employee
 * @property string $BusinessPhone Phone number of the employee at the office
 * @property string $BusinessPhoneExtension Phone extension of the employee at the office
 * @property string $CASONumber Obsolete
 * @property string $City City
 * @property string $Code Code of the employee
 * @property string $Country Country code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Customer Customer ID
 * @property int $Division Division code
 * @property string $Email Email address
 * @property int $EmployeeHID Employee number
 * @property string $EndDate End date of the employee
 * @property string $FirstName First name of the employee
 * @property string $FullName Full name of the employee
 * @property string $Gender Gender
 * @property int $HID Numeric ID of the employee
 * @property string $Initials Initials
 * @property bool $IsActive IsActive
 * @property int $IsAnonymised Indicates whether the employee is anonymised.
 * @property string $Language Language code
 * @property string $LastName Last name
 * @property string $LocationDescription Description of the location of the employee (where am I?)
 * @property string $Manager Direct manager of the employee
 * @property string $MaritalDate Date of marriage
 * @property int $MaritalStatus Marital status
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phone
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Municipality Municipality
 * @property int $NameComposition
 * @property string $Nationality Nationality
 * @property string $NickName Nick name
 * @property string $Notes Additional notes
 * @property string $PartnerName Name of partner
 * @property string $PartnerNamePrefix Middle name of partner
 * @property string $Person Reference to the persons table in which the personal data of the employee is stored
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extension
 * @property string $PictureFileName Filename of picture
 * @property string $PictureUrl Url of picture
 * @property string $Postcode Postcode
 * @property string $PrivateEmail Private email address
 * @property string $SocialSecurityNumber Social security number
 * @property string $StartDate Start date of the employee
 * @property string $State State
 * @property string $Title Title
 * @property string $User User ID of employee
 * @property string $UserFullName Name of user
 */
class Employee extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'ActiveEmployment',
        'AddressLine2',
        'AddressLine3',
        'AddressStreet',
        'AddressStreetNumber',
        'AddressStreetNumberSuffix',
        'BirthDate',
        'BirthName',
        'BirthNamePrefix',
        'BirthPlace',
        'BusinessEmail',
        'BusinessFax',
        'BusinessMobile',
        'BusinessPhone',
        'BusinessPhoneExtension',
        'CASONumber',
        'City',
        'Code',
        'Country',
        'Created',
        'Creator',
        'CreatorFullName',
        'Customer',
        'Division',
        'Email',
        'EmployeeHID',
        'EndDate',
        'FirstName',
        'FullName',
        'Gender',
        'HID',
        'Initials',
        'IsActive',
        'IsAnonymised',
        'Language',
        'LastName',
        'LocationDescription',
        'Manager',
        'MaritalDate',
        'MaritalStatus',
        'MiddleName',
        'Mobile',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Municipality',
        'NameComposition',
        'Nationality',
        'NickName',
        'Notes',
        'PartnerName',
        'PartnerNamePrefix',
        'Person',
        'Phone',
        'PhoneExtension',
        'PictureFileName',
        'PictureUrl',
        'Postcode',
        'PrivateEmail',
        'SocialSecurityNumber',
        'StartDate',
        'State',
        'Title',
        'User',
        'UserFullName',
    ];

    protected $url = 'payroll/Employees';
}

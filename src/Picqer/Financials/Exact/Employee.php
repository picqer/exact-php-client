<?php

namespace Picqer\Financials\Exact;

/**
 * Class Employee.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmployees
 *
 * @property string $ID Primary key
 * @property string $AddressLine2 Second address lineNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $AddressLine3 Third address lineNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $AddressStreet Street of addressNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $AddressStreetNumber Street number of addressNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $AddressStreetNumberSuffix Street number suffix of addressNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $BirthDate Birth dateNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $BirthName Birth name
 * @property string $BirthNamePrefix Birth middle name
 * @property string $BirthPlace Birth placeNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $BusinessEmail Email of the employee at the office
 * @property string $BusinessFax Fax number of the employee at the office
 * @property string $BusinessMobile Office mobile number of the employee
 * @property string $BusinessPhone Phone number of the employee at the office
 * @property string $BusinessPhoneExtension Phone extension of the employee at the office
 * @property string $City CityNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $Code Code of the employee
 * @property string $Country Country codeNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Customer Customer ID
 * @property int $Division Division code
 * @property string $Email Page: User maintenance page; Section: PersonalE-mail address of a user. If employee is linked to a user, the user email is stored in this property.Note: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employeesUsers created in Exact Online can access the company or companies in an administration.
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
 * @property string $MaritalDate Date of marriageNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property int $MaritalStatus Marital statusNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phoneNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Municipality Municipality
 * @property int $NameComposition
 * @property string $Nationality NationalityNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $NickName Nick name
 * @property string $Notes Additional notes
 * @property string $PartnerName Name of partnerNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $PartnerNamePrefix Middle name of partnerNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $Person Reference to the persons table in which the personal data of the employee is stored
 * @property string $Phone Phone numberNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $PhoneExtension Phone number extensionNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $PictureFileName Filename of picture
 * @property string $PictureUrl Url of picture
 * @property string $Postcode PostcodeNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $PrivateEmail Section: Personal Personal e-mail address of the employee.Note: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $SocialSecurityNumber Social security numberNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $StartDate Start date of the employee
 * @property string $State StateNote: The value is only returned if user has any of the following roles: View userEnter variable payroll mutationsManage employeesAnonymise employee and userView personal information Of employees
 * @property string $Title Title
 * @property string $User User ID of employee
 * @property string $UserFullName Name of user
 */
class Employee extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
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

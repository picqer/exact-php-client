<?php namespace Picqer\Financials\Exact;

/**
 * Class Employee
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmployees
 * 
 * @property Guid $ID Primary key
 * @property String $AddressLine2 Second address line
 * @property String $AddressLine3 Third address line
 * @property String $AddressStreet Street of address
 * @property String $AddressStreetNumber Street number of address
 * @property String $AddressStreetNumberSuffix Street number suffix of address
 * @property DateTime $BirthDate Birth date
 * @property String $BirthName Birth name
 * @property String $BirthNamePrefix Birth middle name
 * @property String $BirthPlace Birth place
 * @property String $BusinessEmail Email of the employee at the office
 * @property String $BusinessFax Fax number of the employee at the office
 * @property String $BusinessMobile Office mobile number of the employee
 * @property String $BusinessPhone Phone number of the employee at the office
 * @property String $BusinessPhoneExtension Phone extension of the employee at the office
 * @property String $City City
 * @property String $Code Code of the employee
 * @property String $Country Country code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Guid $Customer Customer ID
 * @property Int32 $Division Division code
 * @property String $Email Email address
 * @property Int32 $EmployeeHID Employee number
 * @property DateTime $EndDate End date of the employee
 * @property String $FirstName First name of the employee
 * @property String $FullName Full name of the employee
 * @property String $Gender Gender
 * @property Int32 $HID Numeric ID of the employee
 * @property String $Initials Initials
 * @property Boolean $IsActive IsActive
 * @property String $Language Language code
 * @property String $LastName Last name
 * @property String $LocationDescription Description of the location of the employee (where am I?)
 * @property Guid $Manager Direct manager of the employee
 * @property DateTime $MaritalDate Date of marriage
 * @property Int16 $MaritalStatus Marital status
 * @property String $MiddleName Middle name
 * @property String $Mobile Mobile phone
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Municipality Municipality
 * @property Int16 $NameComposition 
 * @property String $Nationality Nationality
 * @property String $NickName Nick name
 * @property String $Notes Additional notes
 * @property String $PartnerName Name of partner
 * @property String $PartnerNamePrefix Middle name of partner
 * @property Guid $Person Reference to the persons table in which the personal data of the employee is stored
 * @property String $Phone Phone number
 * @property String $PhoneExtension Phone number extension
 * @property String $PictureFileName Filename of picture
 * @property String $PictureUrl Url of picture
 * @property String $Postcode Postcode
 * @property String $PrivateEmail Private email address
 * @property String $SocialSecurityNumber Social security number
 * @property DateTime $StartDate Start date of the employee
 * @property String $State State
 * @property String $Title Title
 * @property Guid $User User ID of employee
 * @property String $UserFullName Name of user
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
        'UserFullName'
    ];

    protected $url = 'payroll/Employees';

}

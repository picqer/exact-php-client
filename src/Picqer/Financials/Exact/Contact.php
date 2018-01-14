<?php

namespace Picqer\Financials\Exact;

/**
 * Class Contact
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmContacts
 *
 * @property Guid $ID Primary key
 * @property Guid $Account The account to which the contact belongs
 * @property Boolean $AccountIsCustomer Indicates if account is a customer
 * @property Boolean $AccountIsSupplier Indicates if account is a supplier
 * @property Guid $AccountMainContact Reference to the main contact of the account
 * @property String $AccountName Name of the account
 * @property String $AddressLine2 Second address line
 * @property String $AddressStreet Street name of the address
 * @property String $AddressStreetNumber Street number of the address
 * @property String $AddressStreetNumberSuffix Street number suffix of the address
 * @property Int32 $AllowMailing Obsolete
 * @property DateTime $BirthDate Birth date
 * @property String $BirthName Last birth name
 * @property String $BirthNamePrefix Middle birth name
 * @property String $BirthPlace Birth place
 * @property String $BusinessEmail Email address of the contact
 * @property String $BusinessFax Fax of the contact
 * @property String $BusinessMobile Mobile of the contact
 * @property String $BusinessPhone Phone of the contact
 * @property String $BusinessPhoneExtension Phone extension of the contact
 * @property String $City City
 * @property String $Code Code of the account
 * @property String $Country Country code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Int32 $Division Division code
 * @property String $Email Email address of the contact
 * @property DateTime $EndDate End date
 * @property String $FirstName First name. Provide at least first name or last name to create a new contact
 * @property String $FullName Full name (First name Middle name Last name)
 * @property String $Gender Gender: M=Male, V=Female, O=Unknown
 * @property Int32 $HID Contact ID
 * @property DateTime $IdentificationDate Identification date
 * @property Guid $IdentificationDocument Reference to the identification document of the contact
 * @property Guid $IdentificationUser Reference to the user responsible for identification
 * @property String $Initials Initials
 * @property Boolean $IsMailingExcluded Indicates whether contacts are excluded from the marketing list
 * @property Boolean $IsMainContact Indicates if this is the main contact of the linked account
 * @property String $JobTitleDescription Jobtitle of the contact
 * @property String $Language Language code
 * @property String $LastName Last name. Provide at least first name or last name to create a new contact
 * @property String $MarketingNotes The user should be able to do a full text search on these notes to gather contacts for a marketing campaign
 * @property String $MiddleName Middle name
 * @property String $Mobile Business phone of the contact
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Nationality Nationality
 * @property String $Notes Extra remarks
 * @property String $PartnerName Last name of partner
 * @property String $PartnerNamePrefix Middlename of partner
 * @property Guid $Person Reference to the personal information of this contact such as name, gender, address etc.
 * @property String $Phone Phone of the contact
 * @property String $PhoneExtension Phone extension of the contact
 * @property Binary $Picture This field is write-only. The picture can be downloaded through PictureUrl and PictureThumbnailUrl.
 * @property String $PictureName Filename of the picture
 * @property String $PictureThumbnailUrl Url to retrieve the picture thumbnail
 * @property String $PictureUrl Url to retrieve the picture
 * @property String $Postcode Postcode
 * @property String $SocialSecurityNumber Social security number
 * @property DateTime $StartDate Start date
 * @property String $State State
 * @property String $Title Title
 *
 * Note: Due to the way Storable is setup and the way the Exact Online API works certain fields overwrite
 * each other. For example: If you fill the BusinessEmail but not the Email field the latter will overwrite
 * the first. This also applies to the BusinessMobile and Mobile field and the BusinessPhone and Phone field.
 * It is best practice to use the 'main' fields (Email, Mobile and Phone).
 */
class Contact extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountIsCustomer',
        'AccountIsSupplier',
        'AccountMainContact',
        'AccountName',
        'AddressLine2',
        'AddressStreet',
        'AddressStreetNumber',
        'AddressStreetNumberSuffix',
        'AllowMailing',
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
        'Division',
        'Email',
        'EndDate',
        'FirstName',
        'FullName',
        'Gender',
        'HID',
        'IdentificationDate',
        'IdentificationDocument',
        'IdentificationUser',
        'Initials',
        'IsMailingExcluded',
        'IsMainContact',
        'JobTitleDescription',
        'Language',
        'LastName',
        'MarketingNotes',
        'MiddleName',
        'Mobile',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Nationality',
        'Notes',
        'PartnerName',
        'PartnerNamePrefix',
        'Person',
        'Phone',
        'PhoneExtension',
        'Picture',
        'PictureName',
        'PictureThumbnailUrl',
        'PictureUrl',
        'Postcode',
        'SocialSecurityNumber',
        'StartDate',
        'State',
        'Title',
    ];

    protected $url = 'crm/Contacts';
}

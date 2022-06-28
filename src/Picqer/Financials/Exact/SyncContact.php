<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncContact.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncCRMContacts
 *
 * @property int $Timestamp Timestamp
 * @property string $Account The account to which the contact belongs
 * @property bool $AccountIsCustomer Indicates if account is a customer
 * @property bool $AccountIsSupplier Indicates if account is a supplier
 * @property string $AccountMainContact Reference to the main contact of the account
 * @property string $AccountName Name of the account
 * @property string $AddressLine2 Second address line
 * @property string $AddressStreet Street name of the address
 * @property string $AddressStreetNumber Street number of the address
 * @property string $AddressStreetNumberSuffix Street number suffix of the address
 * @property string $BirthDate Birth date
 * @property string $BirthPlace Birth place
 * @property string $BusinessEmail Email address of the contact
 * @property string $BusinessFax Fax of the contact
 * @property string $BusinessMobile Mobile of the contact
 * @property string $BusinessPhone Phone of the contact
 * @property string $BusinessPhoneExtension Phone extension of the contact
 * @property string $City City
 * @property string $Code Code of the account
 * @property string $Country Country code
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property int $Division Division code
 * @property string $Email Email address of the contact
 * @property string $EndDate End date
 * @property string $FirstName First name. Provide at least first name or last name to create a new contact
 * @property string $FullName Full name (First name Middle name Last name)
 * @property string $Gender Gender
 * @property int $HID Contact ID
 * @property string $ID Primary key
 * @property string $IdentificationDate Identification date
 * @property string $IdentificationDocument Reference to the identification document of the contact
 * @property string $IdentificationUser Reference to the user responsible for identification
 * @property string $Initials Initials
 * @property int $IsAnonymised Indicates whether the contact is anonymised.
 * @property bool $IsMailingExcluded Indicates whether contacts are excluded from the marketing list
 * @property bool $IsMainContact Indicates if this is the main contact of the linked account
 * @property string $JobTitleDescription Jobtitle of the contact
 * @property string $Language Language code
 * @property string $LastName Last name. Provide at least first name or last name to create a new contact
 * @property string $LeadPurpose Reference to purpose of an contact
 * @property string $LeadSource Reference to source of an contact
 * @property string $MarketingNotes The user should be able to do a full text search on these notes to gather contacts for a marketing campaign
 * @property string $MiddleName Middle name
 * @property string $Mobile Business phone of the contact
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Nationality Nationality
 * @property string $Notes Extra remarks
 * @property string $PartnerName Last name of partner
 * @property string $PartnerNamePrefix Middlename of partner
 * @property string $Person Reference to the personal information of this contact such as name, gender, address etc.
 * @property string $Phone Phone of the contact
 * @property string $PhoneExtension Phone extension of the contact
 * @property string $Picture This field is write-only. The picture can be downloaded through PictureUrl and PictureThumbnailUrl.
 * @property string $PictureName Filename of the picture
 * @property string $PictureThumbnailUrl Url to retrieve the picture thumbnail
 * @property string $PictureUrl Url to retrieve the picture
 * @property string $Postcode Postcode
 * @property string $SocialSecurityNumber Social security number
 * @property string $StartDate Start date
 * @property string $State State
 * @property string $Title Title
 */
class SyncContact extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Account',
        'AccountIsCustomer',
        'AccountIsSupplier',
        'AccountMainContact',
        'AccountName',
        'AddressLine2',
        'AddressStreet',
        'AddressStreetNumber',
        'AddressStreetNumberSuffix',
        'BirthDate',
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
        'CustomField',
        'Division',
        'Email',
        'EndDate',
        'FirstName',
        'FullName',
        'Gender',
        'HID',
        'ID',
        'IdentificationDate',
        'IdentificationDocument',
        'IdentificationUser',
        'Initials',
        'IsAnonymised',
        'IsMailingExcluded',
        'IsMainContact',
        'JobTitleDescription',
        'Language',
        'LastName',
        'LeadPurpose',
        'LeadSource',
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

    protected $url = 'sync/CRM/Contacts';
}

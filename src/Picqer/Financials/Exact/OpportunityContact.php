<?php

namespace Picqer\Financials\Exact;

/**
 * Class OpportunityContact.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMOpportunityContacts
 *
 * @property string $ID Primary key
 * @property string $Account The account to which the contact belongs
 * @property bool $AccountIsCustomer Indicates if account is a customer
 * @property bool $AccountIsSupplier Indicates if account is a supplier
 * @property string $AccountMainContact Reference to the main contact of the account
 * @property string $AccountName Name of the account
 * @property string $AddressLine2 Second address line
 * @property string $AddressStreet Street name of the address
 * @property string $AddressStreetNumber Street number of the address
 * @property string $AddressStreetNumberSuffix Street number suffix of the address
 * @property int $AllowMailing Obsolete
 * @property string $BirthDate Birth date
 * @property string $BirthName Obsolete. Please don't use this field anymore as it may overwrite LastName.
 * @property string $BirthNamePrefix Obsolete. Please don't use this field anymore as it may overwrite MiddleName.
 * @property string $BirthPlace Birth place
 * @property string $BusinessEmail Email address of the contact
 * @property string $BusinessFax Fax of the contact
 * @property string $BusinessMobile Mobile of the contact
 * @property string $BusinessPhone Phone of the contact
 * @property string $BusinessPhoneExtension Phone extension of the contact
 * @property string $City City
 * @property string $Code Code of the account
 * @property string $Contact Contact person that is linked to the opportunity
 * @property string $Country Country code
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $Email Email address of the contact
 * @property string $EndDate End date
 * @property string $FirstName First name. Provide at least first name or last name to create a new contact
 * @property string $FullName Full name (First name Middle name Last name)
 * @property string $Gender Gender
 * @property int $HID Contact ID
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
 * @property string $MarketingNotes The user should be able to do a full text search on these notes to gather contacts for a marketing campaign
 * @property string $MiddleName Middle name
 * @property string $Mobile Business phone of the contact
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Nationality Nationality
 * @property string $Notes Extra remarks
 * @property string $Opportunity Opportunity that is linked to the contact person
 * @property string $PartnerName Last name of partner
 * @property string $PartnerNamePrefix Middlename of partner
 * @property string $Person Reference to the personal information of this contact such as name, gender, address etc.
 * @property string $Phone Phone of the contact
 * @property string $PhoneExtension Phone extension of the contact
 * @property binary $Picture This field is write-only. The picture can be downloaded through PictureUrl and PictureThumbnailUrl.
 * @property string $PictureName Filename of the picture
 * @property string $PictureThumbnailUrl Url to retrieve the picture thumbnail
 * @property string $PictureUrl Url to retrieve the picture
 * @property string $Postcode Postcode
 * @property string $SocialSecurityNumber Social security number
 * @property string $StartDate Start date
 * @property string $State State
 * @property string $Title Title
 */
class OpportunityContact extends Model
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
        'Contact',
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
        'IsAnonymised',
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
        'Opportunity',
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

    protected $url = 'read/crm/OpportunityContacts';
}

<?php namespace Picqer\Financials\Exact;

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
 * @property String $AccountName Name of the account
 * @property String $AddressStreet Street name of the address
 * @property String $AddressStreetNumber Street number of the address
 * @property String $FirstName First name. Provide at least first name or last name to create a new contact
 * @property String $LastName Last name. Provide at least first name or last name to create a new contact
 * @property String $Phone Phone of the contact
 * @property String $Postcode Postcode
 * @property String $City City
 * @property String $Code Code of the account
 * @property String $Country Country code
 * @property Int32 $Division Division code
 * @property String $Email Email address of the contact
 * @property Int32 $HID Contact ID
 * @property String $JobTitleDescription Jobtitle of the contact
 * @property String $Notes Extra remarks
 * @property Guid $AccountMainContact Reference to the main contact of the account
 * @property Boolean $IsMainContact Indicates if this is the main contact of the linked account
 * @property String $Gender Gender
 * @property String $Title Jobtitle of the contact
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
        'AccountName',
        'AddressStreet',
        'AddressStreetNumber',
        'FirstName',
        'LastName',
        'Phone',
        'Postcode',
        'City',
        'Code',
        'Country',
        'Division',
        'Email',
        'HID',
        'JobTitleDescription',
        'Notes',
        'AccountMainContact',
        'IsMainContact',
        'Gender',
        'Title'
    ];

    protected $url = 'crm/Contacts';

}

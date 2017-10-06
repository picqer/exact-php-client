<?php

namespace Picqer\Financials\Exact;

/**
 * Class Address
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAddresses
 *
 * @property Guid $ID Primary key
 * @property Guid $Account Account linked to the address
 * @property Boolean $AccountIsSupplier Indicates if the account is a supplier
 * @property String $AccountName Name of the account
 * @property String $AddressLine1 First address line
 * @property String $AddressLine2 Second address line
 * @property String $AddressLine3 Third address line
 * @property String $City City
 * @property Guid $Contact Contact linked to Address
 * @property String $ContactName Contact name
 * @property String $Country Country code
 * @property String $CountryName Country name
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property String $Fax Fax number
 * @property Boolean $FreeBoolField_01 Free boolean field 1
 * @property Boolean $FreeBoolField_02 Free boolean field 2
 * @property Boolean $FreeBoolField_03 Free boolean field 3
 * @property Boolean $FreeBoolField_04 Free boolean field 4
 * @property Boolean $FreeBoolField_05 Free boolean field 5
 * @property DateTime $FreeDateField_01 Free date field 1
 * @property DateTime $FreeDateField_02 Free date field 2
 * @property DateTime $FreeDateField_03 Free date field 3
 * @property DateTime $FreeDateField_04 Free date field 4
 * @property DateTime $FreeDateField_05 Free date field 5
 * @property Double $FreeNumberField_01 Free number field 1
 * @property Double $FreeNumberField_02 Free number field 2
 * @property Double $FreeNumberField_03 Free number field 3
 * @property Double $FreeNumberField_04 Free number field 4
 * @property Double $FreeNumberField_05 Free number field 5
 * @property String $FreeTextField_01 Free text field 1
 * @property String $FreeTextField_02 Free text field 2
 * @property String $FreeTextField_03 Free text field 3
 * @property String $FreeTextField_04 Free text field 4
 * @property String $FreeTextField_05 Free text field 5
 * @property String $Mailbox Mailbox
 * @property Boolean $Main Indicates if the address is the main address for this type
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $NicNumber Last 5 digits of SIRET number which is an intern sequential number of 4 digits representing the identification of the localization of the office
 * @property String $Notes Notes for an address
 * @property String $Phone Phone number
 * @property String $PhoneExtension Phone extension
 * @property String $Postcode Postcode
 * @property String $State State
 * @property String $StateDescription Name of the State
 * @property Int16 $Type The type of address. Visit=1, Postal=2, Invoice=3, Delivery=4
 * @property Guid $Warehouse The warehouse linked to the address, if a warehouse is linked the account will be empty. Can only be filled for type=Delivery
 * @property String $WarehouseCode Code of the warehoude
 * @property String $WarehouseDescription Description of the warehouse
 */
class Address extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountIsSupplier',
        'AccountName',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'City',
        'Contact',
        'ContactName',
        'Country',
        'CountryName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Fax',
        'FreeBoolField_01',
        'FreeBoolField_02',
        'FreeBoolField_03',
        'FreeBoolField_04',
        'FreeBoolField_05',
        'FreeDateField_01',
        'FreeDateField_02',
        'FreeDateField_03',
        'FreeDateField_04',
        'FreeDateField_05',
        'FreeNumberField_01',
        'FreeNumberField_02',
        'FreeNumberField_03',
        'FreeNumberField_04',
        'FreeNumberField_05',
        'FreeTextField_01',
        'FreeTextField_02',
        'FreeTextField_03',
        'FreeTextField_04',
        'FreeTextField_05',
        'Mailbox',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NicNumber',
        'Notes',
        'Phone',
        'PhoneExtension',
        'Postcode',
        'State',
        'StateDescription',
        'Type',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'crm/Addresses';
}

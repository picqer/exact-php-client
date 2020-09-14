<?php

namespace Picqer\Financials\Exact;

/**
 * Class DefaultAddressForAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMDefaultAddressForAccount
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the address
 * @property bool $AccountIsSupplier Indicates if the account is a supplier
 * @property string $AccountName Name of the account
 * @property string $AddressLine1 First address line
 * @property string $AddressLine2 Second address line
 * @property string $AddressLine3 Third address line
 * @property string $City City
 * @property string $Contact Contact linked to Address
 * @property string $ContactName Contact name
 * @property string $Country Country code
 * @property string $CountryName Country name
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Fax Fax number
 * @property bool $FreeBoolField_01 Free boolean field 1
 * @property bool $FreeBoolField_02 Free boolean field 2
 * @property bool $FreeBoolField_03 Free boolean field 3
 * @property bool $FreeBoolField_04 Free boolean field 4
 * @property bool $FreeBoolField_05 Free boolean field 5
 * @property string $FreeDateField_01 Free date field 1
 * @property string $FreeDateField_02 Free date field 2
 * @property string $FreeDateField_03 Free date field 3
 * @property string $FreeDateField_04 Free date field 4
 * @property string $FreeDateField_05 Free date field 5
 * @property float $FreeNumberField_01 Free number field 1
 * @property float $FreeNumberField_02 Free number field 2
 * @property float $FreeNumberField_03 Free number field 3
 * @property float $FreeNumberField_04 Free number field 4
 * @property float $FreeNumberField_05 Free number field 5
 * @property string $FreeTextField_01 Free text field 1
 * @property string $FreeTextField_02 Free text field 2
 * @property string $FreeTextField_03 Free text field 3
 * @property string $FreeTextField_04 Free text field 4
 * @property string $FreeTextField_05 Free text field 5
 * @property string $Mailbox Mailbox
 * @property bool $Main Indicates if the address is the main address for this type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $NicNumber Last 5 digits of SIRET number which is an intern sequential number of 4 digits representing the identification of the localization of the office
 * @property string $Notes Notes for an address
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone extension
 * @property string $Postcode Postcode
 * @property string $State State
 * @property string $StateDescription Name of the State
 * @property int $Type The type of address. Visit=1, Postal=2, Invoice=3, Delivery=4
 * @property string $Warehouse The warehouse linked to the address, if a warehouse is linked the account will be empty. Can only be filled for type=Delivery
 * @property string $WarehouseCode Code of the warehoude
 * @property string $WarehouseDescription Description of the warehouse
 */
class DefaultAddressForAccount extends Model
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

    protected $url = 'read/crm/DefaultAddressForAccount?accountId={Edm.Guid}&addressType={Edm.Int32}';
}

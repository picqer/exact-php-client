<?php

namespace Picqer\Financials\Exact;

/**
 * Class GetMostRecentlyUsedDivision.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemGetMostRecentlyUsedDivisions
 *
 * @property int $Code Primary key
 * @property string $AddressLine1 Address line 1
 * @property string $AddressLine2 Address line 2
 * @property string $AddressLine3 Address line 3
 * @property int $BlockingStatus Values: 0 = Not blocked, 1 = Backup, 2 = Conversion busy, 3 = Conversion shadow, 4 = Conversion waiting, 5 = Copy data waiting, 6 = Copy data buzy, 100 = Wait for deletion, 101 = Deleted, 102 = Deletion failed
 * @property string $BusinessTypeCode Business Type Code
 * @property string $BusinessTypeDescription Business Type Description
 * @property string $ChamberOfCommerceEstablishment Chamber of commerce establishment
 * @property string $ChamberOfCommerceNumber Chamber of commerce number
 * @property string $City City
 * @property DivisionClass $Class_01 First division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_02 Second division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_03 Third division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_04 Fourth division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_05 Fifth division classification. User should have access rights to view division classifications.
 * @property string $CompanySizeCode Company Size Code
 * @property string $CompanySizeDescription Company Size Description
 * @property string $Country Country of the division. Is used for determination of legislation
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency Default currency
 * @property bool $Current True when this division is most recently used by the API
 * @property string $Customer Owner account of the division
 * @property string $CustomerCode Owner account code of the division
 * @property string $CustomerName Owner account name of the division
 * @property string $DatevAccountantNumber Accountant number DATEV (Germany)
 * @property string $DatevClientNumber Client number DATEV (Germany)
 * @property string $Description Description
 * @property string $Email Email address
 * @property string $Fax Fax number
 * @property int64 $Hid Company number that is assigned by the customer
 * @property bool $IsMainDivision True if the division is the main division
 * @property string $Legislation Legislation
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Phone Phone number
 * @property string $Postcode Postcode
 * @property string $SbiCode SBI Code
 * @property string $SbiDescription SBI Description
 * @property string $SectorCode Sector Code
 * @property string $SectorDescription Sector Description
 * @property float $ShareCapital the part of the capital of a company that comes from the issue of shares (France)
 * @property string $SiretNumber An INSEE code which allows the geographic identification of the company. (France)
 * @property string $StartDate Date on which the division becomes active
 * @property string $State State/Province code
 * @property int $Status Follow the Division Status 0 for Inactive, 1 for Active and 2 for Archived Divisions
 * @property string $SubsectorCode Subsector Code
 * @property string $SubsectorDescription Subsector Description
 * @property string $TaxOfficeNumber Number of your local tax authority (Germany)
 * @property string $TaxReferenceNumber Local tax reference number (Germany)
 * @property string $VATNumber The number under which the account is known at the Value Added Tax collection agency
 * @property string $Website Customer value, hyperlink to external website
 */
class GetMostRecentlyUsedDivision extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'BlockingStatus',
        'BusinessTypeCode',
        'BusinessTypeDescription',
        'ChamberOfCommerceEstablishment',
        'ChamberOfCommerceNumber',
        'City',
        'Class_01',
        'Class_02',
        'Class_03',
        'Class_04',
        'Class_05',
        'CompanySizeCode',
        'CompanySizeDescription',
        'Country',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Current',
        'Customer',
        'CustomerCode',
        'CustomerName',
        'DatevAccountantNumber',
        'DatevClientNumber',
        'Description',
        'Email',
        'Fax',
        'Hid',
        'IsMainDivision',
        'Legislation',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Phone',
        'Postcode',
        'SbiCode',
        'SbiDescription',
        'SectorCode',
        'SectorDescription',
        'ShareCapital',
        'SiretNumber',
        'StartDate',
        'State',
        'Status',
        'SubsectorCode',
        'SubsectorDescription',
        'TaxOfficeNumber',
        'TaxReferenceNumber',
        'VATNumber',
        'Website',
    ];

    protected $url = 'system/GetMostRecentlyUsedDivisions';
}

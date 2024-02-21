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
 * @property string $ArchiveDate Date on which the division is archived
 * @property int $BlockingStatus Values: 0 = Not blocked, 1 = Backup/restore, 2 = Conversion busy, 3 = Conversion shadow, 4 = Conversion waiting, 5 = Copy data waiting, 6 = Copy data busy
 * @property string $BusinessTypeCode Business type code
 * @property string $BusinessTypeDescription Business type description
 * @property string $ChamberOfCommerceEstablishment Chamber of commerce establishment
 * @property string $ChamberOfCommerceNumber Chamber of commerce number
 * @property string $City City
 * @property DivisionClass $Class_01 First division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_02 Second division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_03 Third division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_04 Fourth division classification. User should have access rights to view division classifications.
 * @property DivisionClass $Class_05 Fifth division classification. User should have access rights to view division classifications.
 * @property string $CompanySizeCode Company size code
 * @property string $CompanySizeDescription Company size description
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
 * @property string $DivisionHRLinkUnlinkDate Date when the division was linked or unlinked to Exact Online HR. Please resync all data when this value changes because value of Timestamp is regenerated.
 * @property string $DivisionMoveDate Date when the division was moved. Please resync all data when this value changes because value of Timestamp is regenerated.
 * @property string $Email Email address
 * @property string $Fax Fax number
 * @property int $Hid Company number that is assigned by the customer
 * @property bool $IsDossierDivision True if the division is a dossier division
 * @property bool $IsHRDivision True if the division is linked to Exact Online HR
 * @property bool $IsMainDivision True if the division is the main division
 * @property bool $IsPracticeDivision True if the division is a practice division
 * @property string $Legislation Legislation
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $OBNumber The soletrader VAT number used for offical returns to tax authority
 * @property string $Phone Phone number
 * @property string $Postcode Postcode
 * @property string $SbiCode SBI code
 * @property string $SbiDescription SBI description
 * @property string $SectorCode Sector code
 * @property string $SectorDescription Sector description
 * @property float $ShareCapital the part of the capital of a company that comes from the issue of shares (France)
 * @property string $SiretNumber An INSEE code which allows the geographic identification of the company. (France)
 * @property string $StartDate Date on which the division becomes active
 * @property string $State State/Province code
 * @property int $Status Follow the Division Status 0 for Inactive, 1 for Active and 2 for Archived Divisions
 * @property string $SubsectorCode Subsector code
 * @property string $SubsectorDescription Subsector description
 * @property string $TaxOfficeNumber Number of your local tax authority (Germany)
 * @property string $TaxReferenceNumber Local tax reference number (Germany)
 * @property string $TemplateCode Division template code
 * @property string $VATNumber The number under which the account is known at the Value Added Tax collection agency
 * @property string $Website Customer value, hyperlink to external website
 */
class GetMostRecentlyUsedDivision extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'ArchiveDate',
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
        'DivisionHRLinkUnlinkDate',
        'DivisionMoveDate',
        'Email',
        'Fax',
        'Hid',
        'IsDossierDivision',
        'IsHRDivision',
        'IsMainDivision',
        'IsPracticeDivision',
        'Legislation',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OBNumber',
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
        'TemplateCode',
        'VATNumber',
        'Website',
    ];

    protected $url = 'system/GetMostRecentlyUsedDivisions';
}

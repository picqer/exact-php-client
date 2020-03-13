<?php

namespace Picqer\Financials\Exact;

/**
 * Class Division.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMDivisions
 *
 * @property int $Code Primary key
 * @property int $BlockingStatus Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property divisionclasses $Class_01 First division classification. User should have access rights to view division classifications.
 * @property divisionclasses $Class_02 Second division classification. User should have access rights to view division classifications.
 * @property divisionclasses $Class_03 Third division classification. User should have access rights to view division classifications.
 * @property divisionclasses $Class_04 Fourth division classification. User should have access rights to view division classifications.
 * @property divisionclasses $Class_05 Fifth division classification. User should have access rights to view division classifications.
 * @property string $Country Country of the division. Is used for determination of legislation
 * @property string $CountryDescription Description of Country
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency Default currency of the division
 * @property string $CurrencyDescription Description of Currency
 * @property string $Customer Owner account of the division
 * @property string $CustomerCode Owner account code of the division
 * @property string $CustomerName Owner account name of the division
 * @property string $Description Description
 * @property int64 $HID Number that customers give to the division
 * @property bool $Main True for the main (hosting) division
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $SiretNumber Siret Number of the division (France)
 * @property string $StartDate Date on which the division becomes active
 * @property int $Status Regular administrations will have status 0.  Currently, the only other possibility is 'archived' (1), which means the administration is not actively used, but still needs to be accessible for the customer/accountant to meet legal obligations
 * @property string $TaxOfficeNumber Number of your local tax authority (Germany)
 * @property string $TaxReferenceNumber Local tax reference number (Germany)
 * @property string $VATNumber VAT number
 * @property string $Website Customer value, hyperlink to external website
 */
class Division extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'BlockingStatus',
        'Class_01',
        'Class_02',
        'Class_03',
        'Class_04',
        'Class_05',
        'Country',
        'CountryDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CurrencyDescription',
        'Customer',
        'CustomerCode',
        'CustomerName',
        'Description',
        'HID',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'SiretNumber',
        'StartDate',
        'Status',
        'TaxOfficeNumber',
        'TaxReferenceNumber',
        'VATNumber',
        'Website',
    ];

    protected $url = 'hrm/Divisions';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class Division
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=hrmDivisions
 *
 * @property int $Code Primary key
 * @property int $BlockingStatus Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property string $Country Country of the division. Is used for determination of legislation
 * @property string $CountryDescription Description of Country
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $Currency Default currency of the division
 * @property string $CurrencyDescription Description of Currency
 * @property string $Customer Owner account of the division
 * @property string $Description Description of Country
 * @property int $HID Number that customers give to the division
 * @property bool $Main True for the main (hosting) division
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $SiretNumber Siret Number of the division (France)
 * @property string $StartDate Date on which the division becomes active
 * @property int $Status Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property string $TaxOfficeNumber Number of your local tax authority (Germany)
 * @property string $TaxReferenceNumber Local tax reference number (Germany)
 * @property string $VATNumber VAT number
 * @property string $Website Customer value, hyperlink to external website
 */
class Division extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'BlockingStatus',
        'Country',
        'CountryDescription',
        'Created',
        'Creator',
        'Currency',
        'CurrencyDescription',
        'Customer',
        'Description',
        'HID',
        'Main',
        'Modified',
        'Modifier',
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

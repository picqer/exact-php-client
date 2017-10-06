<?php

namespace Picqer\Financials\Exact;

/**
 * Class Division
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=hrmDivisions
 *
 * @property Int32 $Code Primary key
 * @property Int32 $BlockingStatus Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property String $Country Country of the division. Is used for determination of legislation
 * @property String $CountryDescription Description of Country
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $Currency Default currency of the division
 * @property String $CurrencyDescription Description of Currency
 * @property Guid $Customer Owner account of the division
 * @property String $Description Description of Country
 * @property Int64 $HID Number that customers give to the division
 * @property Boolean $Main True for the main (hosting) division
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $SiretNumber Siret Number of the division (France)
 * @property DateTime $StartDate Date on which the division becomes active
 * @property Int32 $Status Values: 0 = Not blocked 1 = Backup 2 = Conversion busy 3 = Conversion shadow 4 = Conversion waiting 5 = Copy data waiting 6 = Copy data buzy 100 = Wait for deletion 101 = Deleted 102 = Deletion failed
 * @property String $TaxOfficeNumber Number of your local tax authority (Germany)
 * @property String $TaxReferenceNumber Local tax reference number (Germany)
 * @property String $VATNumber VAT number
 * @property String $Website Customer value, hyperlink to external website
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

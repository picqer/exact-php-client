<?php

namespace Picqer\Financials\Exact;

/**
 * Class SystemDivision
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemDivisions
 *
 * @property Int32 $Code Primary key
 * @property String $AddressLine1 Address line 1
 * @property String $AddressLine2 Address line 2
 * @property String $AddressLine3 Address line 3
 * @property String $ChamberOfCommerceNumber Chamber of commerce number
 * @property String $City City
 * @property String $Country Country of the division. Is used for determination of legislation
 * @property DateTime $Created Creation date
 * @property String $Currency Default currency
 * @property Boolean $Current True when this division is most recently used by the API
 * @property Guid $Customer Owner account of the division
 * @property String $CustomerCode Owner account code of the division
 * @property String $CustomerName Owner account name of the division
 * @property String $Description Description
 * @property String $Email Email address
 * @property Int64 $Hid Company number that is assigned by the customer
 * @property Boolean $IsMainDivision True if the division is the main division
 * @property DateTime $Modified Last modified date
 * @property String $Phone Phone number
 * @property String $Postcode Postcode
 * @property String $State State/Province code
 * @property Int32 $Status Follow the Division Status 0 for Inactive, 1 for Active and 2 for Archived Divisions
 * @property String $VATNumber The number under which the account is known at the Value Added Tax collection agency
 */
class SystemDivision extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'ChamberOfCommerceNumber',
        'City',
        'Country',
        'Created',
        'Currency',
        'Current',
        'Customer',
        'CustomerCode',
        'CustomerName',
        'Description',
        'Email',
        'Hid',
        'IsMainDivision',
        'Modified',
        'Phone',
        'Postcode',
        'State',
        'Status',
        'VATNumber'
    ];

    protected $url = 'system/Divisions';
}

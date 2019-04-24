<?php

namespace Picqer\Financials\Exact;

/**
 * Class SystemDivision.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemDivisions
 *
 * @property int $Code Primary key
 * @property string $AddressLine1 Address line 1
 * @property string $AddressLine2 Address line 2
 * @property string $AddressLine3 Address line 3
 * @property string $ChamberOfCommerceNumber Chamber of commerce number
 * @property string $City City
 * @property string $Country Country of the division. Is used for determination of legislation
 * @property string $Created Creation date
 * @property string $Currency Default currency
 * @property bool $Current True when this division is most recently used by the API
 * @property string $Customer Owner account of the division
 * @property string $CustomerCode Owner account code of the division
 * @property string $CustomerName Owner account name of the division
 * @property string $Description Description
 * @property string $Email Email address
 * @property int $Hid Company number that is assigned by the customer
 * @property bool $IsMainDivision True if the division is the main division
 * @property string $Modified Last modified date
 * @property string $Phone Phone number
 * @property string $Postcode Postcode
 * @property string $State State/Province code
 * @property int $Status Follow the Division Status 0 for Inactive, 1 for Active and 2 for Archived Divisions
 * @property string $VATNumber The number under which the account is known at the Value Added Tax collection agency
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
        'VATNumber',
    ];

    protected $url = 'system/Divisions';
}

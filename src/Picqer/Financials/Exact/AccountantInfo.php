<?php 

namespace Picqer\Financials\Exact;

/**
 * Class AccountantInfo
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemAccountantInfo
 * 
 * @property Guid $ID The account ID of the accountant.
 * @property String $AddressLine1 First address line.
 * @property String $AddressLine2 Second address line.
 * @property String $AddressLine3 Third address line.
 * @property String $City City.
 * @property String $Email Email.
 * @property Boolean $IsAccountant Indicates if the customer is an accountant himself.
 * @property Binary $Logo Logo.
 * @property String $MenuLogoUrl Url to retrieve the logo of the accountant.
 * @property String $Name The name of the accountant.
 * @property String $Phone Phone.
 * @property String $Postcode Postcode.
 * @property String $Website Website.
 */
class AccountantInfo extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'City',
        'Email',
        'IsAccountant',
        'Logo',
        'MenuLogoUrl',
        'Name',
        'Phone',
        'Postcode',
        'Website'
    ];

    protected $url = 'system/AccountantInfo';

}

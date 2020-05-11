<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountantInfo.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemAccountantInfo
 *
 * @property string $ID The account ID of the accountant.
 * @property string $AddressLine1 First address line.
 * @property string $AddressLine2 Second address line.
 * @property string $AddressLine3 Third address line.
 * @property string $City City.
 * @property string $Email Email.
 * @property bool $IsAccountant Indicates if the customer is an accountant himself.
 * @property binary $Logo Logo.
 * @property string $MenuLogoUrl Url to retrieve the logo of the accountant.
 * @property string $Name The name of the accountant.
 * @property string $Phone Phone.
 * @property string $Postcode Postcode.
 * @property string $Website Website.
 */
class AccountantInfo extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'Website',
    ];

    protected $url = 'system/AccountantInfo';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class AddressState.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAddressStates
 *
 * @property string $ID Primary key
 * @property string $Country Country code
 * @property string $DisplayValue Description of state prefixed with the code
 * @property float $Latitude Latitude
 * @property float $Longitude Longitude
 * @property string $Name State name
 * @property string $State State code
 */
class AddressState extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Country',
        'DisplayValue',
        'Latitude',
        'Longitude',
        'Name',
        'State',
    ];

    protected $url = 'crm/AddressStates';
}

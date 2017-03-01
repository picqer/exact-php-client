<?php 

namespace Picqer\Financials\Exact;

/**
 * Class AddressState
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAddressStates
 * 
 * @property Guid $ID Primary key
 * @property String $Country Country code
 * @property String $DisplayValue Description of state prefixed with the code
 * @property Double $Latitude Latitude
 * @property Double $Longitude Longitude
 * @property String $Name State name
 * @property String $State State code
 */
class AddressState extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Country',
        'DisplayValue',
        'Latitude',
        'Longitude',
        'Name',
        'State'
    ];

    protected $url = 'crm/AddressStates';

}

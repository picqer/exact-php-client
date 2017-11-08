<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ShippingMethod
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesShippingMethods
 *
 * @property Guid $ID Primary key
 * @property Boolean $Active Active
 * @property String $Code Code of the shipping method
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of shipping method
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 * @property String $ShippingRatesURL Shipping method rates URL
 * @property String $TrackingURL Tracking URL
 */
class ShippingMethod extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'ShippingRatesURL',
        'TrackingURL',
    ];

    protected $url = 'sales/ShippingMethods';

}

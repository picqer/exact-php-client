<?php

namespace Picqer\Financials\Exact;

/**
 * Class Item
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesShippingMethods
 *
 * @property string $ID Primary key
 * @property bool $Active Active
 * @property string $Code Code of the shipping method
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of shipping method
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property string $ShippingRatesURL Shipping method rates URL
 * @property string $TrackingURL Tracking URL
 */
class SalesShippingMethods extends Model
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
        'TrackingURL'
    ];

    protected $url = 'sales/ShippingMethods';
}

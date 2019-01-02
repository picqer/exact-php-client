<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesItemPrice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSalesItemPrices
 *
 * @property string $ID Primary key
 * @property string $Account ID of the customer
 * @property string $AccountName Name of the customer account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency The currency of the price
 * @property string $DefaultItemUnit The default unit of the item
 * @property string $DefaultItemUnitDescription The description of the default item unit
 * @property int $Division Division code
 * @property string $EndDate Together with StartDate this determines if the item is active
 * @property string $Item Item ID
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NumberOfItemsPerUnit This is the multiplication factor when going from default item unit to the unit of this price.For example if the default item unit is 'gram' and the price unit is 'kilogram' then the value of this property is 1000.
 * @property float $Price The actual price of this sales item
 * @property float $Quantity Minimum quantity to which the price is applicable
 * @property string $StartDate Together with EndDate this determines whether the price is active
 * @property string $Unit The unit code of the price
 * @property string $UnitDescription Description of the price unit
 */
class SalesItemPrice extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DefaultItemUnit',
        'DefaultItemUnitDescription',
        'Division',
        'EndDate',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NumberOfItemsPerUnit',
        'Price',
        'Quantity',
        'StartDate',
        'Unit',
        'UnitDescription',
    ];

    protected $url = 'logistics/SalesItemPrices';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesItemPrice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSalesItemPrices
 *
 * @property Guid $ID Primary key
 * @property Guid $Account ID of the customer
 * @property String $AccountName Name of the customer account
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency The currency of the price
 * @property String $DefaultItemUnit The default unit of the item
 * @property String $DefaultItemUnitDescription The description of the default item unit
 * @property Int32 $Division Division code
 * @property DateTime $EndDate Together with StartDate this determines if the item is active
 * @property Guid $Item Item ID
 * @property String $ItemCode Code of Item
 * @property String $ItemDescription Description of Item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $NumberOfItemsPerUnit This is the multiplication factor when going from default item unit to the unit of this price.For example if the default item unit is 'gram' and the price unit is 'kilogram' then the value of this property is 1000.
 * @property Double $Price The actual price of this sales item
 * @property Double $Quantity Minimum quantity to which the price is applicable
 * @property DateTime $StartDate Together with EndDate this determines whether the price is active
 * @property String $Unit The unit code of the price
 * @property String $UnitDescription Description of the price unit
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

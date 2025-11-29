<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSalesItemPrice.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncLogisticsSalesItemPrices
 *
 * @property int $Timestamp Timestamp
 * @property string $Account ID of the customer
 * @property string $AccountName Name of the customer account
 * @property string $Barcode This is the barcode for the unit other than standard unit of the item. Only supported by the Premium for Wholesale & Distribution and Manufacturing
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency The currency of the price
 * @property string $DefaultItemUnit The default unit of the item
 * @property string $DefaultItemUnitDescription The description of the default item unit
 * @property int $Division Division code
 * @property string $Employee ID of the employee that is linked to sales item price
 * @property string $EndDate Together with StartDate this determines whether the price is active
 * @property string $ID Primary key
 * @property string $Item Item ID
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NumberOfItemsPerUnit This is the multiplication factor when going from default item unit to the unit of this price.For example if the default item unit is 'gram' and the price unit is 'kilogram' then the value of this property is 1000.
 * @property float $Price The actual price of this sales item
 * @property string $Project ID of project that is linked to sales item price
 * @property string $ProjectDescription Description of the project
 * @property float $Quantity Minimum quantity to which the price is applicable
 * @property string $StartDate Together with EndDate this determines whether the price is active
 * @property string $Unit The unit code of the price
 * @property string $UnitDescription Description of the price unit
 */
class SyncSalesItemPrice extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Account',
        'AccountName',
        'Barcode',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DefaultItemUnit',
        'DefaultItemUnitDescription',
        'Division',
        'Employee',
        'EndDate',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NumberOfItemsPerUnit',
        'Price',
        'Project',
        'ProjectDescription',
        'Quantity',
        'StartDate',
        'Unit',
        'UnitDescription',
    ];

    protected $url = 'sync/Logistics/SalesItemPrices';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SupplierItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSupplierItem
 *
 * @property string $ID Primary key
 * @property string $CountryOfOrigin Country of origin code
 * @property string $CountryOfOriginDescription Description of country of origin
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency of item price
 * @property string $CurrencyDescription Description of currency of item price
 * @property int $Division Division code
 * @property int $DropShipment Indicates that the supplier will deliver the item directly to customer. Values: 0 = No, 1 = Yes, 2 = Optional
 * @property string $Item Item ID
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property bool $MainSupplier Indicates this is a main supplier
 * @property float $MinimumQuantity Minimum quantity of the item for purchase, only available for Wholesale & Distribution (Premium only)
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $PurchaseLeadTime The number of days between placing an order with a supplier and receiving items from the supplier
 * @property float $PurchasePrice Purchase price
 * @property string $PurchaseUnit Unit code
 * @property string $PurchaseUnitDescription Description of unit
 * @property float $PurchaseUnitFactor This is the multiplication factor when going from default item unit to the unit of this price
 * @property string $PurchaseVATCode VAT code
 * @property string $PurchaseVATCodeDescription Description of VAT
 * @property string $Supplier Supplier ID
 * @property string $SupplierCode Supplier code
 * @property string $SupplierDescription Description of supplier
 * @property string $SupplierItemCode Supplier’s item code
 */
class SupplierItem extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CountryOfOrigin',
        'CountryOfOriginDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CurrencyDescription',
        'Division',
        'DropShipment',
        'Item',
        'ItemCode',
        'ItemDescription',
        'MainSupplier',
        'MinimumQuantity',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PurchaseLeadTime',
        'PurchasePrice',
        'PurchaseUnit',
        'PurchaseUnitDescription',
        'PurchaseUnitFactor',
        'PurchaseVATCode',
        'PurchaseVATCodeDescription',
        'Supplier',
        'SupplierCode',
        'SupplierDescription',
        'SupplierItemCode',
    ];

    protected $url = 'logistics/SupplierItem';

}
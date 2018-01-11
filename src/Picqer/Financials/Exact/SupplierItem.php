<?php

namespace Picqer\Financials\Exact;

/**
 * Class SupplierItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSupplierItem
 *
 * @property Guid $ID Primary key
 * @property String $CountryOfOrigin Country of origin code
 * @property String $CountryOfOriginDescription Description of country of origin
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency of item price
 * @property String $CurrencyDescription Description of currency of item price
 * @property Int32 $Division Division code
 * @property Byte $DropShipment Indicates that the supplier will deliver the item directly to customer. Values: 0 = No, 1 = Yes, 2 = Optional
 * @property Guid $Item Item ID
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of Item
 * @property Boolean $MainSupplier Indicates this is a main supplier
 * @property Double $MinimumQuantity Minimum quantity of the item for purchase, only available for Wholesale & Distribution (Premium only)
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $PurchaseLeadTime The number of days between placing an order with a supplier and receiving items from the supplier
 * @property Double $PurchasePrice Purchase price
 * @property String $PurchaseUnit Unit code
 * @property String $PurchaseUnitDescription Description of unit
 * @property Double $PurchaseUnitFactor This is the multiplication factor when going from default item unit to the unit of this price
 * @property String $PurchaseVATCode VAT code
 * @property String $PurchaseVATCodeDescription Description of VAT
 * @property Guid $Supplier Supplier ID
 * @property String $SupplierCode Supplier code
 * @property String $SupplierDescription Description of supplier
 * @property String $SupplierItemCode Supplier’s item code
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
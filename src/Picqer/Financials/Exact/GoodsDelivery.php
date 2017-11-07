<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsDelivery
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveries
 *
 * @property Guid $EntryID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Guid $DeliveryAccount Reference to account for delivery
 * @property String $DeliveryAccountCode Delivery account code
 * @property String $DeliveryAccountName Account name
 * @property Guid $DeliveryAddress Reference to shipping address
 * @property Guid $DeliveryContact Reference to contact for delivery
 * @property String $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property DateTime $DeliveryDate Date of goods delivery
 * @property Int32 $DeliveryNumber Delivery number
 * @property String $Description Header description
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is manually linked to the sales order delivery
 * @property String $DocumentSubject Document Subject
 * @property Int32 $EntryNumber Entry number
 * @property GoodsDeliveryLines $GoodsDeliveryLines Collection of lines
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Remarks Remarks
 * @property Guid $ShippingMethod Reference to shipping method
 * @property String $ShippingMethodCode Code of shipping method
 * @property String $ShippingMethodDescription Description of shipping method
 * @property String $TrackingNumber Reference to header tracking number
 * @property Guid $Warehouse Warehouse
 * @property String $WarehouseCode Code of Warehouse
 * @property String $WarehouseDescription Description of Warehouse
 */
class GoodsDelivery extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $fillable = [
        'EntryID',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountName',
        'DeliveryAddress',
        'DeliveryContact',
        'DeliveryContactPersonFullName',
        'DeliveryDate',
        'DeliveryNumber',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'EntryNumber',
        'GoodsDeliveryLines',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Remarks',
        'ShippingMethod',
        'ShippingMethodCode',
        'ShippingMethodDescription',
        'TrackingNumber',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'salesorder/GoodsDeliveries';

}

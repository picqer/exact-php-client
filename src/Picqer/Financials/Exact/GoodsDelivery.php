<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsDelivery.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveries
 *
 * @property string $EntryID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $DeliveryAccount Reference to account for delivery
 * @property string $DeliveryAccountCode Delivery account code
 * @property string $DeliveryAccountName Account name
 * @property string $DeliveryAddress Reference to shipping address
 * @property string $DeliveryContact Reference to contact for delivery
 * @property string $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property string $DeliveryDate Date of goods delivery
 * @property int $DeliveryNumber Delivery number
 * @property string $Description Header description
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the sales order delivery
 * @property string $DocumentSubject Document Subject
 * @property int $EntryNumber Entry number
 * @property GoodsDeliveryLine[] $GoodsDeliveryLines Collection of lines
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Remarks Remarks
 * @property string $ShippingMethod Reference to shipping method. Define shipping method during POST, else it will be empty by default.
 * @property string $ShippingMethodCode Code of shipping method
 * @property string $ShippingMethodDescription Description of shipping method
 * @property string $TrackingNumber Reference to header tracking number
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
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

    public function getGoodsDeliveryLines()
    {
        if (array_key_exists('__deferred', $this->attributes['GoodsDeliveryLines'])) {
            $this->attributes['GoodsDeliveryLines'] = (new GoodsDeliveryLine($this->connection()))->filter("EntryID eq guid'{$this->EntryID}'");
        }
        return $this->attributes['GoodsDeliveryLines'];
    }
}

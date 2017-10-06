<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrder
 *
 * @package Picqer\Financials\Exact
 * @See https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrders
 *
 * @property Edm.Guid $PurchaseOrderID Primary key
 * @property Edm.Double $AmountDC Total amount in the default currency of the company
 * @property Edm.Double $AmountFC Total amount in the currency of the transaction
 * @property Edm.DateTime $Created Creation date
 * @property Edm.Guid $Creator User ID of creator
 * @property Edm.String $CreatorFullName Name of creator
 * @property Edm.String $Currency Currency code
 * @property Edm.Guid $DeliveryAccount Reference to account for delivery
 * @property Edm.String $DeliveryAccountCode Delivery account code
 * @property Edm.String $DeliveryAccountName Account name
 * @property Edm.Guid $DeliveryAddress Reference to shipping address
 * @property Edm.Guid $DeliveryContact Reference to contact for delivery
 * @property Edm.String $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property Edm.String $Description Description of the purchase order
 * @property Edm.Int32 $Division Division code
 * @property Edm.Guid $Document Document that is manually linked to the purchase order
 * @property Edm.String $DocumentSubject Subject of the document
 * @property Edm.Boolean $DropShipment Shows if it is a drop shipment purchase order
 * @property Edm.Double $ExchangeRate Allows you to set the currency for the invoice. You can only do this if you have checked the Variable: Currency and Variable: Exchange rate fields in the sales journal settings. Once a line has been created in the invoice, the currency can no longer be changed.
 * @property Edm.Int32 $InvoiceStatus Invoice status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property Edm.DateTime $Modified Last modified date
 * @property Edm.Guid $Modifier User ID of modifier
 * @property Edm.String $ModifierFullName Name of modifier
 * @property Edm.DateTime $OrderDate Order date
 * @property Edm.Int32 $OrderNumber Human readable id of the purchase order
 * @property Edm.Int32 $OrderStatus Purchase order status: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property Edm.String $PaymentCondition The payment condition code used for due date and discount calculation
 * @property Edm.String $PaymentConditionDescription Description of payment condition
 * @property Edm.Guid $PurchaseAgent Purchase agent
 * @property Edm.String $PurchaseAgentFullName Name of purchase agent
 * @property PurchaseOrderLines $PurchaseOrderLines Collection of lines
 * @property Edm.DateTime $ReceiptDate This field shows the date the goods are expected to be received.
 * @property Edm.Int32 $ReceiptStatus Receipt status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property Edm.String $Remarks Include any relevant remarks regarding the purchase order.
 * @property Edm.Guid $SalesOrder Reference to sales order when purchase order generated via back to back sales order
 * @property Edm.Int32 $SalesOrderNumber Number of the sales order
 * @property Edm.Guid $ShippingMethod ShippingMethod
 * @property Edm.String $ShippingMethodDescription Description of ShippingMethod
 * @property Edm.Int16 $Source This shows how the purchase order was created: 1-Manual entry, 2-Import, 3-Other, 4-Purchase order, 5-Sales order, 6-Supplier's items, 7-Subcontract, 8-Purchase order advice, 9-Shop order, 10-MRP calculation
 * @property Edm.Guid $Supplier Reference to supplier account
 * @property Edm.String $SupplierCode Code of supplier
 * @property Edm.Guid $SupplierContact Contact of supplier
 * @property Edm.String $SupplierContactPersonFullName Contact person full name of supplier
 * @property Edm.String $SupplierName Name of supplier
 * @property Edm.Double $VATAmount Total VAT amount in the currency of the transaction
 * @property Edm.Guid $Warehouse Warehouse
 * @property Edm.String $WarehouseCode Code of Warehouse
 * @property Edm.String $WarehouseDescription Description of Warehouse
 * @property Edm.String $YourRef Shows the reference number associated with the purchase order. Enter a description and reference to make the purchase order easier to identify.
 */
class PurchaseOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'PurchaseOrderID';

    protected $purchaseOrderLines = [];

    protected $fillable = [
        'PurchaseOrderID',
        'AmountDC',
        'AmountFC',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountName',
        'DeliveryAddress',
        'DeliveryContact',
        'DeliveryContactPersonFullName',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'DropShipment',
        'ExchangeRate',
        'InvoiceStatus',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderDate',
        'OrderNumber',
        'OrderStatus',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PurchaseAgent',
        'PurchaseAgentFullName',
        'PurchaseOrderLines',
        'ReceiptDate',
        'ReceiptStatus',
        'Remarks',
        'SalesOrder',
        'SalesOrderNumber',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Source',
        'Supplier',
        'SupplierCode',
        'SupplierContact',
        'SupplierContactPersonFullName',
        'SupplierName',
        'VATAmount',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'YourRef',
    ];

    /**
     * @param array $array
     */
    public function addItem(array $array)
    {
        if (! isset($this->attributes['PurchaseOrderLines']) || $this->attributes['PurchaseOrderLines'] == null) {
            $this->attributes['PurchaseOrderLines'] = [];
        }
        if (! isset($array['LineNumber'])) {
            $array['LineNumber'] = count($this->attributes['PurchaseOrderLines']) + 1;
        }
        $this->attributes['PurchaseOrderLines'][] = $array;
    }

    protected $url = 'purchaseorder/PurchaseOrders';
}

<?php namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrders
 * 
 * @property Guid $PurchaseOrderID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency code
 * @property Guid $DeliveryAccount Reference to account for delivery
 * @property String $DeliveryAccountCode Delivery account code
 * @property String $DeliveryAccountName Account name
 * @property Guid $DeliveryAddress Reference to shipping address
 * @property Guid $DeliveryContact Reference to contact for delivery
 * @property String $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property String $Description Description of the purchase order
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is manually linked to the purchase order
 * @property String $DocumentSubject Subject of the document
 * @property Boolean $DropShipment Shows if it is a drop shipment purchase order
 * @property Double $ExchangeRate Allows you to set the currency for the invoice. You can only do this if you have checked the Variable: Currency and Variable: Exchange rate fields in the sales journal settings. Once a line has been created in the invoice, the currency can no longer be changed.
 * @property Int32 $InvoiceStatus Invoice status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property DateTime $OrderDate Order date
 * @property Int32 $OrderNumber Human readable id of the purchase order
 * @property Int32 $OrderStatus Purchase order status: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property String $PaymentCondition The payment condition code used for due date and discount calculation
 * @property String $PaymentConditionDescription Description of payment condition
 * @property PurchaseOrderLines $PurchaseOrderLines Collection of lines
 * @property DateTime $ReceiptDate This field shows the date the goods are expected to be received.
 * @property Int32 $ReceiptStatus Receipt status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property String $Remarks Include any relevant remarks regarding the purchase order.
 * @property Guid $SalesOrder Reference to sales order when purchase order generated via back to back sales order
 * @property Int32 $SalesOrderNumber Number of the sales order
 * @property Int16 $Source This shows how the purchase order was created: 1-Manual entry, 2-Import, 3-Other, 4-Purchase order, 5-Sales order, 6-Supplier's items, 7-Subcontract, 8-Purchase order advice, 9-Shop order, 10-MRP calculation
 * @property Guid $Supplier Reference to supplier account
 * @property String $SupplierCode Code of supplier
 * @property Guid $SupplierContact Contact of supplier
 * @property String $SupplierContactPersonFullName Contact person full name of supplier
 * @property String $SupplierName Name of supplier
 * @property Guid $Warehouse Warehouse
 * @property String $WarehouseCode Code of Warehouse
 * @property String $WarehouseDescription Description of Warehouse
 * @property String $YourRef Shows the reference number associated with the purchase order. Enter a description and reference to make the purchase order easier to identify.
 */
class PurchaseOrder extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'PurchaseOrderID';

    protected $fillable = [
        'PurchaseOrderID',
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
        'PurchaseOrderLines',
        'ReceiptDate',
        'ReceiptStatus',
        'Remarks',
        'SalesOrder',
        'SalesOrderNumber',
        'Source',
        'Supplier',
        'SupplierCode',
        'SupplierContact',
        'SupplierContactPersonFullName',
        'SupplierName',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'YourRef'
    ];

    protected $url = 'purchaseorder/PurchaseOrders';

}

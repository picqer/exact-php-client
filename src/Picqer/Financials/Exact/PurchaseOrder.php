<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrders
 *
 * @property string $PurchaseOrderID Primary key
 * @property float $AmountDC Total amount in the default currency of the company
 * @property float $AmountFC Total amount in the currency of the transaction
 * @property int $ApprovalStatus Approval status of purchase order. 0=Awaiting approval, 1=Automatically, 2=Approved.
 * @property string $ApprovalStatusDescription Description of ApprovalStatus
 * @property string $Approved Approval datetime
 * @property string $Approver User who approved the purchase order
 * @property string $ApproverFullName Name of approver
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $DeliveryAccount Reference to account for delivery
 * @property string $DeliveryAccountCode Delivery account code
 * @property string $DeliveryAccountName Account name
 * @property string $DeliveryAddress Reference to shipping address
 * @property string $DeliveryContact Reference to contact for delivery
 * @property string $DeliveryContactPersonFullName Name of the contact person of the customer who will receive delivered goods
 * @property string $Description Description of the purchase order
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the purchase order
 * @property string $DocumentSubject Subject of the document
 * @property bool $DropShipment Shows if it is a drop shipment purchase order
 * @property float $ExchangeRate The exchange rate between the invoice currency and the default currency of the division.
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property int $InvoiceStatus Invoice status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OrderDate Order date
 * @property int $OrderNumber Human readable id of the purchase order
 * @property int $OrderStatus Purchase order status: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $PaymentCondition The payment condition code used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of payment condition
 * @property string $PurchaseAgent Purchase agent
 * @property string $PurchaseAgentFullName Name of purchase agent
 * @property int $PurchaseOrderLineCount Total row count of lines
 * @property PurchaseOrderLine[] $PurchaseOrderLines Collection of lines
 * @property string $ReceiptDate This field shows the date the goods are expected to be received.
 * @property int $ReceiptStatus Receipt status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $Remarks Include any relevant remarks regarding the purchase order.
 * @property string $SalesOrder Reference to sales order when purchase order generated via back to back sales order. Show NULL if more than one sales order is linked to the purchase order.
 * @property int $SalesOrderNumber Number of the sales order. Show NULL if more than one sales order is linked to the purchase order.
 * @property string $SelectionCode ID of selection code. Only supported by the Plus, Professional and Premium for Wholesale & Distribution and Manufacturing
 * @property string $SelectionCodeCode Code of selection code
 * @property string $SelectionCodeDescription Description of selection code
 * @property string $ShippingMethod ShippingMethod
 * @property string $ShippingMethodCode Code of ShippingMethod
 * @property string $ShippingMethodDescription Description of ShippingMethod
 * @property int $Source This shows how the purchase order was created: 1-Manual entry, 2-Import, 3-Other, 4-Purchase order, 5-Sales order, 6-Supplier's items, 7-Subcontract, 8-Purchase order advice, 9-Shop order, 10-MRP calculation, 11-Rest API, 12-Merge purchase orders
 * @property string $Supplier Reference to supplier account
 * @property string $SupplierCode Code of supplier
 * @property string $SupplierContact Contact of supplier
 * @property string $SupplierContactPersonFullName Contact person full name of supplier
 * @property string $SupplierName Name of supplier
 * @property float $VATAmount Total VAT amount in the currency of the transaction
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 * @property string $YourRef Shows the reference number associated with the purchase order. Enter a description and reference to make the purchase order easier to identify.
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
        'ApprovalStatus',
        'ApprovalStatusDescription',
        'Approved',
        'Approver',
        'ApproverFullName',
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
        'IncotermAddress',
        'IncotermCode',
        'IncotermVersion',
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
        'PurchaseOrderLineCount',
        'PurchaseOrderLines',
        'ReceiptDate',
        'ReceiptStatus',
        'Remarks',
        'SalesOrder',
        'SalesOrderNumber',
        'SelectionCode',
        'SelectionCodeCode',
        'SelectionCodeDescription',
        'ShippingMethod',
        'ShippingMethodCode',
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

    protected $url = 'purchaseorder/PurchaseOrders';

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

    public function getPurchaseOrderLines($select = '')
    {
        if (array_key_exists('__deferred', $this->attributes['PurchaseOrderLines'])) {
            $this->attributes['PurchaseOrderLines'] = (new PurchaseOrderLine($this->connection()))->filter("PurchaseOrderID eq guid'{$this->PurchaseOrderID}'", '', $select);
        }

        return $this->attributes['PurchaseOrderLines'];
    }
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncPurchaseOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncPurchaseOrderPurchaseOrders
 *
 * @property int $Timestamp Timestamp
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property int $ApprovalStatus Approval status of purchase order. 0=Awaiting approval, 1=Automatically, 2=Approved. Approve a new purchase order by giving value 2 if user has PurchaseOrderApproval right.
 * @property string $ApprovalStatusDescription Description of ApprovalStatus
 * @property string $Approved Approval datetime
 * @property string $Approver User who approved the purchase order
 * @property string $ApproverFullName Name of approver
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterCode Code of Cost Center (user-defined ID)
 * @property string $CostCenterDescription Description of Cost Center
 * @property string $CostUnit Reference to Cost Unit
 * @property string $CostUnitCode Code of Cost Unit (user-defined ID)
 * @property string $CostUnitDescription Description of Cost Unit
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
 * @property string $Description Description
 * @property float $Discount Discount in percentage for item
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the purchase order
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property bool $DropShipment Shows if it is a drop shipment purchase order
 * @property float $ExchangeRate The exchange rate between the invoice currency and the default currency of the division.
 * @property string $Expense Expense related to the Work Breakdown Structure of the selected project. Only available with a professional service license
 * @property string $ExpenseDescription Description of expense. Only available with a professional service license
 * @property string $ID Primary key
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property float $InvoicedQuantity Quantity of item that has been invoiced
 * @property int $InvoiceStatus Invoice status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property int $IsBatchNumberItem Indicates that an Item is an batch item
 * @property int $IsSerialNumberItem Indicates that an Item is an serial item
 * @property string $Item Reference to the item for purchase order
 * @property string $ItemBarcode Barcode of the item (numeric string)
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NetPrice The net price is the unit price (VAT code taken into account) with any discount applied
 * @property string $Notes Notes
 * @property string $OrderDate Order date
 * @property int $OrderNumber Human readable id of the purchase order
 * @property int $OrderStatus Purchase order status: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property string $PaymentCondition The payment condition code used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of payment condition
 * @property string $Project Reference to project. Only available with a professional service license
 * @property string $ProjectCode Project code. Only available with a professional service license
 * @property string $ProjectDescription Description of the project. Only available with a professional service license
 * @property string $PurchaseAgent Purchase agent
 * @property string $PurchaseAgentFullName Name of purchase agent
 * @property string $PurchaseOrderID The Purchase OrderID identifies the purchase order. All the lines of a purchase order have the same Purchase Order ID
 * @property float $Quantity Quantity in item units
 * @property float $QuantityInPurchaseUnits Quantity in purchase units. Use this field when creating a purchase order
 * @property bool $Rebill Indicates whether the purchase order line needs to be rebilled. Only available with a professional service license
 * @property string $ReceiptDate This field shows the date the goods are expected to be received.
 * @property int $ReceiptStatus Receipt status of purchase order: 10-Open, 20-Partial, 30-Complete, 40-Canceled
 * @property float $ReceivedQuantity Quantity of goods received
 * @property string $Remarks Include any relevant remarks regarding the purchase order.
 * @property string $SalesOrder Reference to sales order when purchase order generated via back to back sales order. Show NULL if more than one sales order is linked to the purchase order.
 * @property string $SalesOrderLine Sales order line of the sales order that Is linked to a back to back sales order in purchase order. Show NULL if more than one sales order is linked to the purchase order line.
 * @property int $SalesOrderLineNumber Number of the sales order line. Show NULL if more than one sales order is linked to the purchase order line.
 * @property int $SalesOrderNumber Number of the sales order. Show NULL if more than one sales order is linked to the purchase order line.
 * @property string $SelectionCode ID of selection code. Only supported by the Plus, Professional and Premium for Wholesale & Distribution and Manufacturing
 * @property string $SelectionCodeCode Code of selection code
 * @property string $SelectionCodeDescription Description of selection code
 * @property int $SendingMethod SendingMethod
 * @property string $ShippingMethod Shipping Method
 * @property string $ShippingMethodCode Code of Shipping Method
 * @property string $ShippingMethodDescription Description of Shipping Method
 * @property int $Source This shows how the purchase order was created: 1-Manual entry, 2-Import, 3-Other, 4-Purchase order, 5-Sales order, 6-Supplier's items, 7-Subcontract, 8-Purchase order advice, 9-Shop order, 10-MRP calculation, 11-Rest API, 12-Merge purchase orders
 * @property string $Supplier Reference to supplier account
 * @property string $SupplierCode Code of supplier
 * @property string $SupplierContact Contact of supplier
 * @property string $SupplierContactPersonFullName Contact person full name of supplier
 * @property string $SupplierItemCode Code the supplier uses for this item
 * @property int $SupplierItemCopyRemarks Indicate if the notes content should be copied from SupplierItem's remarks. The default follows the CopyRemarks value from SupplierItem. Values: 0 = Do not copy remark, 1 = Copy remark
 * @property string $SupplierName Name of supplier
 * @property string $Unit Code of item unit
 * @property string $UnitDescription Description of unit
 * @property float $UnitPrice Item price per purchase unit
 * @property float $VATAmount Total VAT amount in the currency of the transaction
 * @property string $VATCode The VAT code used when the invoice was registered
 * @property string $VATDescription Description of vat code
 * @property float $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 * @property string $YourRef The reference number of the customer
 */
class SyncPurchaseOrder extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountDC',
        'AmountFC',
        'ApprovalStatus',
        'ApprovalStatusDescription',
        'Approved',
        'Approver',
        'ApproverFullName',
        'CostCenter',
        'CostCenterCode',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitCode',
        'CostUnitDescription',
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
        'Discount',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DropShipment',
        'ExchangeRate',
        'Expense',
        'ExpenseDescription',
        'ID',
        'IncotermAddress',
        'IncotermCode',
        'IncotermVersion',
        'InvoicedQuantity',
        'InvoiceStatus',
        'IsBatchNumberItem',
        'IsSerialNumberItem',
        'Item',
        'ItemBarcode',
        'ItemCode',
        'ItemDescription',
        'ItemDivisable',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NetPrice',
        'Notes',
        'OrderDate',
        'OrderNumber',
        'OrderStatus',
        'PaymentCondition',
        'PaymentConditionDescription',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'PurchaseAgent',
        'PurchaseAgentFullName',
        'PurchaseOrderID',
        'Quantity',
        'QuantityInPurchaseUnits',
        'Rebill',
        'ReceiptDate',
        'ReceiptStatus',
        'ReceivedQuantity',
        'Remarks',
        'SalesOrder',
        'SalesOrderLine',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'SelectionCode',
        'SelectionCodeCode',
        'SelectionCodeDescription',
        'SendingMethod',
        'ShippingMethod',
        'ShippingMethodCode',
        'ShippingMethodDescription',
        'Source',
        'Supplier',
        'SupplierCode',
        'SupplierContact',
        'SupplierContactPersonFullName',
        'SupplierItemCode',
        'SupplierItemCopyRemarks',
        'SupplierName',
        'Unit',
        'UnitDescription',
        'UnitPrice',
        'VATAmount',
        'VATCode',
        'VATDescription',
        'VATPercentage',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'YourRef',
    ];

    protected $url = 'sync/PurchaseOrder/PurchaseOrders';
}

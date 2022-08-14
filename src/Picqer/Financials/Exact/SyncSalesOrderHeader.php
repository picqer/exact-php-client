<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSalesOrderHeader.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncSalesOrderSalesOrderHeaders
 *
 * @property int $Timestamp Timestamp
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountDiscount Discount amount in the default currency of the company. Only supported for header
 * @property float $AmountDiscountExclVat Discount amount excluding VAT in the default currency of the company. Only supported for header
 * @property float $AmountFC Amount in the currency of the transaction
 * @property float $AmountFCExclVat Amount exclude VAT in the currency of the transaction. Only supported for header
 * @property int $ApprovalStatus Shows if this sales order is approved
 * @property string $ApprovalStatusDescription Description of ApprovalStatus
 * @property string $Approved Approval datetime
 * @property string $Approver User who approved the sales order
 * @property string $ApproverFullName Name of approver
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $DeliverTo Reference to the delivery customer. For an existing sales order this value can not be changed.
 * @property string $DeliverToContactPerson Reference to contact person of delivery customer
 * @property string $DeliverToContactPersonFullName Name of contact person of delivery customer
 * @property string $DeliverToName Name of delivery customer
 * @property string $DeliveryAddress Delivery address
 * @property string $DeliveryDate Delivery date of this line
 * @property int $DeliveryStatus Shipping status of the sales order. 12=Open, 20=Partial, 21=Complete, 45=Cancelled
 * @property string $DeliveryStatusDescription Description of DeliveryStatus
 * @property string $Description Description
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the sales order
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $ID Primary key
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property int $InvoiceStatus Invoice status of the sales order. 12=Open, 20=Partial, 21=Complete, 45=Cancelled
 * @property string $InvoiceStatusDescription Description of InvoiceStatus
 * @property string $InvoiceTo Reference to the customer who will receive the invoice. For an existing sales order this value can not be changed.
 * @property string $InvoiceToContactPerson Reference to the contact person of the customer who will receive the invoice
 * @property string $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property string $InvoiceToName Name of the customer who will receive the invoice
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra notes
 * @property string $OrderDate Order date
 * @property string $OrderedBy Customer who ordered the sales order. For an existing sales order this value can not be changed.
 * @property string $OrderedByContactPerson Contact person of the customer who ordered the sales order
 * @property string $OrderedByContactPersonFullName Name of contact person of the customer who ordered the sales order
 * @property string $OrderedByName Name of the customer who ordered the sales order
 * @property string $OrderID The OrderID identifies the sales order. All the lines of a sales order have the same OrderID
 * @property int $OrderNumber Number of sales order
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference Payment reference for sales order
 * @property string $Project The project to which the sales order line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property string $Remarks Extra remarks
 * @property string $SalesChannel ID of Sales channel.
 * @property string $SalesChannelCode Code of Sales channel
 * @property string $SalesChannelDescription Description of Sales channel
 * @property string $Salesperson Sales representative
 * @property string $SalespersonFullName Name of sales representative
 * @property string $SelectionCode ID of selection code
 * @property string $SelectionCodeCode Code of selection code
 * @property string $SelectionCodeDescription Description of selection code
 * @property string $ShippingMethod ShippingMethod
 * @property string $ShippingMethodCode Code of Shipping Method
 * @property string $ShippingMethodDescription Description of Shipping Method
 * @property int $Status The status of the sales order. 12 = Open, 20 = Partial, 21 = Complete, 45 = Cancelled.
 * @property string $StatusDescription Description of Status
 * @property float $VATAmount VAT amount in the currency of the transaction
 * @property string $VATCode VAT code
 * @property string $VATCodeDescription Description of VATCode
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 * @property string $WarehouseID Warehouse
 * @property string $YourRef The reference number of the customer
 */
class SyncSalesOrderHeader extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountDC',
        'AmountDiscount',
        'AmountDiscountExclVat',
        'AmountFC',
        'AmountFCExclVat',
        'ApprovalStatus',
        'ApprovalStatusDescription',
        'Approved',
        'Approver',
        'ApproverFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DeliverTo',
        'DeliverToContactPerson',
        'DeliverToContactPersonFullName',
        'DeliverToName',
        'DeliveryAddress',
        'DeliveryDate',
        'DeliveryStatus',
        'DeliveryStatusDescription',
        'Description',
        'Discount',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'ID',
        'IncotermAddress',
        'IncotermCode',
        'IncotermVersion',
        'InvoiceStatus',
        'InvoiceStatusDescription',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderID',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentReference',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'Remarks',
        'SalesChannel',
        'SalesChannelCode',
        'SalesChannelDescription',
        'Salesperson',
        'SalespersonFullName',
        'SelectionCode',
        'SelectionCodeCode',
        'SelectionCodeDescription',
        'ShippingMethod',
        'ShippingMethodCode',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'VATAmount',
        'VATCode',
        'VATCodeDescription',
        'WarehouseCode',
        'WarehouseDescription',
        'WarehouseID',
        'YourRef',
    ];

    protected $url = 'sync/SalesOrder/SalesOrderHeaders';
}

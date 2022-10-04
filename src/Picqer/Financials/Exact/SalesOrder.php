<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrders
 *
 * @property string $OrderID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountDiscount Discount amount in the default currency of the company
 * @property float $AmountDiscountExclVat Discount amount excluding VAT in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property float $AmountFCExclVat Amount exclude VAT in the currency of the transaction
 * @property int $ApprovalStatus Approval status of sales order. 0=Awaiting approval, 1=Automatically, 2=Approved. Approve a new sales order by giving value 2 if user has SalesOrderApproval right.
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
 * @property string $DeliveryDate Delivery date
 * @property int $DeliveryStatus Shipping status
 * @property string $DeliveryStatusDescription Description of DeliveryStatus
 * @property string $Description Description
 * @property float $Discount Discount percentage
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the sales order
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property int $InvoiceStatus Invoice status
 * @property string $InvoiceStatusDescription Description of InvoiceStatus
 * @property string $InvoiceTo Reference to the customer who will receive the invoice. For an existing sales order this value can not be changed.
 * @property string $InvoiceToContactPerson Reference to the contact person of the customer who will receive the invoice
 * @property string $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property string $InvoiceToName Name of the customer who will receive the invoice
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $OrderDate Order date
 * @property string $OrderedBy Customer who ordered the sales order. For an existing sales order this value can not be changed.
 * @property string $OrderedByContactPerson Contact person of the customer who ordered the sales order
 * @property string $OrderedByContactPersonFullName Name of contact person of the customer who ordered the sales order
 * @property string $OrderedByName Name of the customer who ordered the sales order
 * @property int $OrderNumber Number of sales order
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference Payment reference for sales order
 * @property string $Remarks Extra remarks
 * @property string $SalesChannel ID of Sales channel.
 * @property string $SalesChannelCode Code of Sales channel
 * @property string $SalesChannelDescription Description of Sales channel
 * @property SalesOrderLine[] $SalesOrderLines Collection of lines
 * @property SalesOrderOrderChargeLine[] $SalesOrderOrderChargeLines Collection of order charge lines
 * @property string $Salesperson Sales representative
 * @property string $SalespersonFullName Name of sales representative
 * @property string $SelectionCode ID of selection code. Only supported by the Plus, Professional and Premium for Wholesale & Distribution and Manufacturing
 * @property string $SelectionCodeCode Code of selection code
 * @property string $SelectionCodeDescription Description of selection code
 * @property string $ShippingMethod ShippingMethod
 * @property string $ShippingMethodDescription Description of ShippingMethod
 * @property int $Status The status of the sales order. 12 = Open, 20 = Partial, 21 = Complete, 45 = Cancelled.
 * @property string $StatusDescription Description of Status
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 * @property string $WarehouseID Warehouse. Only supported by the Plus, Professional and Premium editions for Wholesale & Distribution and Manufacturing
 * @property string $YourRef The reference number of the customer
 */
class SalesOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'OrderID';

    protected $saleOrderLines = [];

    protected $fillable = [
        'OrderID',
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
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentReference',
        'Remarks',
        'SalesChannel',
        'SalesChannelCode',
        'SalesChannelDescription',
        'SalesOrderLines',
        'SalesOrderOrderChargeLines',
        'Salesperson',
        'SalespersonFullName',
        'SelectionCode',
        'SelectionCodeCode',
        'SelectionCodeDescription',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'WarehouseCode',
        'WarehouseDescription',
        'WarehouseID',
        'YourRef',
    ];

    protected $url = 'salesorder/SalesOrders';

    /**
     * @param array $array
     */
    public function addItem(array $array)
    {
        if (! isset($this->attributes['SalesOrderLines']) || $this->attributes['SalesOrderLines'] == null) {
            $this->attributes['SalesOrderLines'] = [];
        }
        if (! isset($array['LineNumber'])) {
            $array['LineNumber'] = count($this->attributes['SalesOrderLines']) + 1;
        }
        $this->attributes['SalesOrderLines'][] = $array;
    }
}

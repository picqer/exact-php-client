<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrders
 *
 * @property Guid $OrderID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property Int16 $ApprovalStatus Shows if this sales order is approved
 * @property String $ApprovalStatusDescription Description of ApprovalStatus
 * @property DateTime $Approved Approval datetime
 * @property Guid $Approver User who approved the sales order
 * @property String $ApproverFullName Name of approver
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency code
 * @property Guid $DeliverTo Reference to delivery customer
 * @property Guid $DeliverToContactPerson Reference to contact person of delivery customer
 * @property String $DeliverToContactPersonFullName Name of contact person of delivery customer
 * @property String $DeliverToName Name of delivery customer
 * @property Guid $DeliveryAddress Delivery address
 * @property DateTime $DeliveryDate Delivery date
 * @property Int16 $DeliveryStatus Shipping status
 * @property String $DeliveryStatusDescription Description of DeliveryStatus
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is manually linked to the sales order
 * @property Int32 $DocumentNumber Number of the document
 * @property String $DocumentSubject Subject of the document
 * @property Int16 $InvoiceStatus Invoice status
 * @property String $InvoiceStatusDescription Description of InvoiceStatus
 * @property Guid $InvoiceTo Reference to the Customer who will receive the invoice
 * @property Guid $InvoiceToContactPerson Reference to the Contact person of the customer who will receive the invoice
 * @property String $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property String $InvoiceToName Name of the customer who will receive the invoice
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property DateTime $OrderDate Order date
 * @property Guid $OrderedBy Customer who ordered the sales order
 * @property Guid $OrderedByContactPerson Contact person of the customer who ordered the sales order
 * @property String $OrderedByContactPersonFullName Name of contact person of the customer who ordered the sales order
 * @property String $OrderedByName Name of the customer who ordered the sales order
 * @property Int32 $OrderNumber Number of sales order
 * @property String $PaymentCondition The payment condition used for due date and discount calculation
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property String $PaymentReference Payment reference for sales order
 * @property String $Remarks Extra remarks
 * @property SalesOrderLines $SalesOrderLines Collection of lines
 * @property Guid $Salesperson Sales representative
 * @property String $SalespersonFullName Name of sales representative
 * @property Guid $ShippingMethod ShippingMethod
 * @property String $ShippingMethodDescription Description of ShippingMethod
 * @property Int16 $Status The status of the sales order. 12 = Open, 20 = Partial, 21 = Complete, 45 = Cancelled.
 * @property String $StatusDescription Description of Status
 * @property Guid $TaxSchedule Tax schedule linked
 * @property String $TaxScheduleCode Code of the tax schedule
 * @property String $TaxScheduleDescription Description of the tax schedule
 * @property String $WarehouseCode Code of Warehouse
 * @property String $WarehouseDescription Description of Warehouse
 * @property Guid $WarehouseID Warehouse
 * @property String $YourRef The reference number of the customer
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
        'DeliverTo',
        'DeliverToContactPerson',
        'DeliverToContactPersonFullName',
        'DeliverToName',
        'DeliveryAddress',
        'DeliveryDate',
        'DeliveryStatus',
        'DeliveryStatusDescription',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
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
        'SalesOrderLines',
        'Salesperson',
        'SalespersonFullName',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'WarehouseCode',
        'WarehouseDescription',
        'WarehouseID',
        'YourRef',
    ];

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

    protected $url = 'salesorder/SalesOrders';
}
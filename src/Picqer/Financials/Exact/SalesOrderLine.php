<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrderLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property float $CostPriceFC Item cost price
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $CustomerItemCode Code the customer uses for this item
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $DeliveryDate Delivery date of this line
 * @property int $DeliveryStatus Shipping status of the sales order line. 12=Open, 20=Partial, 21=Complete, 45=Cancelled
 * @property string $Description Description
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $Division Division code
 * @property int $InvoiceStatus Invoice status of the sales order line. 12=Open, 20=Partial, 21=Complete, 45=Cancelled
 * @property string $Item Reference to the item that is sold in this sales order line
 * @property string $ItemCode Code of Item
 * @property string $ItemDescription Description of Item
 * @property string $ItemVersion Item Version
 * @property string $ItemVersionDescription Description of Item Version
 * @property int $LineNumber Line number
 * @property float $Margin Sales margin of the sales order line
 * @property float $NetPrice Net price of the sales order line
 * @property string $Notes Extra notes
 * @property string $OrderID The OrderID identifies the sales order. All the lines of a sales order have the same OrderID
 * @property int $OrderNumber Number of sales order
 * @property int $OrderStatus The status of the sales order line. 12=Open, 20=Partial, 21=Complete, 45=Cancelled
 * @property string $Pricelist Price list
 * @property string $PricelistDescription Description of Pricelist
 * @property string $Project The project to which the sales order line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property string $PurchaseOrder Purchase order that is linked to the sales order
 * @property string $PurchaseOrderLine Purchase order line of the purchase order that is linked to the sales order
 * @property int $PurchaseOrderLineNumber Number of the purchase order line
 * @property int $PurchaseOrderNumber Number of the purchase order
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor.Positive quantity = Sales order lines, Negative quantity = Trade-in lines.
 * @property float $QuantityDelivered The number of items delivered
 * @property float $QuantityInvoiced The number of items invoiced
 * @property string $ShopOrder Reference to ShopOrder
 * @property string $UnitCode Code of item unit
 * @property string $UnitDescription Description of Unit
 * @property float $UnitPrice Price per unit in the currency of the transaction
 * @property int $UseDropShipment Indicates if drop shipment is used (delivery directly to customer, invoice to wholesaler)
 * @property float $VATAmount VAT amount in the currency of the transaction
 * @property string $VATCode VAT code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the sales order is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesOrderLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostPriceFC',
        'CostUnit',
        'CostUnitDescription',
        'CustomerItemCode',
        'CustomField',
        'DeliveryDate',
        'DeliveryStatus',
        'Description',
        'Discount',
        'Division',
        'InvoiceStatus',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemVersion',
        'ItemVersionDescription',
        'LineNumber',
        'Margin',
        'NetPrice',
        'Notes',
        'OrderID',
        'OrderNumber',
        'OrderStatus',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'PurchaseOrder',
        'PurchaseOrderLine',
        'PurchaseOrderLineNumber',
        'PurchaseOrderNumber',
        'Quantity',
        'QuantityDelivered',
        'QuantityInvoiced',
        'ShopOrder',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'UseDropShipment',
        'VATAmount',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
    ];

    protected $url = 'salesorder/SalesOrderLines';
}

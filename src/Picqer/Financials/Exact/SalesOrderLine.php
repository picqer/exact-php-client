<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrderLines
 *
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $CostCenter Reference to Cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property Double $CostPriceFC Item cost price
 * @property String $CostUnit Reference to Cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property DateTime $DeliveryDate Delivery date of this line
 * @property String $Description Description
 * @property Double $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property Int32 $Division Division code
 * @property Guid $Item Reference to the item that is sold in this sales order line
 * @property String $ItemCode Code of Item
 * @property String $ItemDescription Description of Item
 * @property Guid $ItemVersion Item Version
 * @property String $ItemVersionDescription Description of Item Version
 * @property Int32 $LineNumber Line number
 * @property Double $Margin Sales margin of the sales order line
 * @property Double $NetPrice Net price of the sales order line
 * @property String $Notes Extra notes
 * @property Guid $OrderID The OrderID identifies the sales order. All the lines of a sales order have the same OrderID
 * @property Int32 $OrderNumber Number of sales order
 * @property Guid $Pricelist Price list
 * @property String $PricelistDescription Description of Pricelist
 * @property Guid $Project The project to which the sales order line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property String $ProjectDescription Description of Project
 * @property Guid $PurchaseOrder Purchase order that is linked to the sales order
 * @property Guid $PurchaseOrderLine Purchase order line of the purchase order that is linked to the sales order
 * @property Int32 $PurchaseOrderLineNumber Number of the purchase order line
 * @property Int32 $PurchaseOrderNumber Number of the purchase order
 * @property Double $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property Double $QuantityDelivered The number of items delivered
 * @property Double $QuantityInvoiced The number of items invoiced
 * @property Guid $ShopOrder Reference to ShopOrder
 * @property Guid $TaxSchedule Tax schedule linked
 * @property String $TaxScheduleCode Code of the tax schedule
 * @property String $TaxScheduleDescription Description of the tax schedule
 * @property String $UnitCode Code of item unit
 * @property String $UnitDescription Description of Unit
 * @property Double $UnitPrice Price per unit in the currency of the transaction
 * @property Byte $UseDropShipment Indicates if drop shipment is used (delivery directly to customer, invoice to wholesaler)
 * @property Double $VATAmount VAT amount in the currency of the transaction
 * @property String $VATCode VAT code
 * @property String $VATCodeDescription Description of VATCode
 * @property Double $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the sales order is created. It's also used for the default calculation of VAT amounts and VAT base amounts
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
        'DeliveryDate',
        'Description',
        'Discount',
        'Division',
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
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'UseDropShipment',
        'VATAmount',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage'
    ];

    protected $url = 'salesorder/SalesOrderLines';
}

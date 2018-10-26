<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrderLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrderLines
 *
 * @property string $ID  Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the purchase order line
 * @property float $Discount Discount in percentage for item
 * @property int $Division Division code
 * @property string $Expense Expense related to the Work Breakdown Structure of the selected project. Only available with a professional service license
 * @property string $ExpenseDescription Description of expense. Only available with a professional service license
 * @property float $InStock The current stock level of items shown in stock unit. The information is displayed only for items with the stock property selected.
 * @property float $InvoicedQuantity Quantity of item that has been invoiced
 * @property string $Item Reference to the item for purchase order
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of item
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NetPrice The net price is the unit price (VAT code taken into account) with any discount applied
 * @property string $Notes Notes
 * @property string $Project Reference to project. Only available with a professional service license
 * @property string $ProjectCode Project code. Only available with a professional service license
 * @property string $ProjectDescription Description of the project. Only available with a professional service license
 * @property float $ProjectedStock The current stock level + the planned quantity to be received - the planned quantity to deliver shown in stock unit.
 * @property string $PurchaseOrderID Identifies the purchase order. All the lines of a purchase order have the same PurchaseOrderID
 * @property float $Quantity Quantity in item units
 * @property float $QuantityInPurchaseUnits Quantity in purchase units. Use this field when creating a purchase order
 * @property bool $Rebill Indicates whether the purchase order line needs to be rebilled. Only available with a professional service license
 * @property string $ReceiptDate Date the goods are expected to be received
 * @property float $ReceivedQuantity Quantity of goods received
 * @property string $SalesOrder Sales order that is linked to a back to back sales order in purchase order
 * @property string $SalesOrderLine Sales order line of the sales order that is linked to a back to back sales order in purchase order
 * @property int $SalesOrderLineNumber Number of the sales order line
 * @property int $SalesOrderNumber Number of the sales order
 * @property string $SupplierItemCode Code the supplier uses for this item
 * @property string $Unit Code of item unit
 * @property string $UnitDescription Description of unit
 * @property float $UnitPrice Item price per purchase unit
 * @property float $VATAmount Amount of VAT charges calculated from total amount and vat percentage
 * @property string $VATCode The VAT code used when the invoice was registered
 * @property string $VATDescription Description of vat code
 * @property float $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 */
class PurchaseOrderLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Discount',
        'Division',
        'Expense',
        'ExpenseDescription',
        'InStock',
        'InvoicedQuantity',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemDivisable',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NetPrice',
        'Notes',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'ProjectedStock',
        'PurchaseOrderID',
        'Quantity',
        'QuantityInPurchaseUnits',
        'Rebill',
        'ReceiptDate',
        'ReceivedQuantity',
        'SalesOrder',
        'SalesOrderLine',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'SupplierItemCode',
        'Unit',
        'UnitDescription',
        'UnitPrice',
        'VATAmount',
        'VATCode',
        'VATDescription',
        'VATPercentage',
    ];

    protected $url = 'purchaseorder/PurchaseOrderLines';
}

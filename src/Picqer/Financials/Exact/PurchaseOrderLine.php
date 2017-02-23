<?php namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrderLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrderLines
 * 
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property String $CostCenter Reference to Cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property String $CostUnit Reference to Cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the purchase order line
 * @property Double $Discount Discount in percentage for item
 * @property Int32 $Division Division code
 * @property Guid $Expense Expense related to the Work Breakdown Structure of the selected project
 * @property String $ExpenseDescription Description of expense
 * @property Double $InStock The current stock level of items shown in stock unit. The information is displayed only for items with the stock property selected.
 * @property Double $InvoicedQuantity Quantity of item that has been invoiced
 * @property Guid $Item Reference to the item for purchase order
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of item
 * @property Boolean $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property Int32 $LineNumber Line number
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $NetPrice The net price is the unit price (VAT code taken into account) with any discount applied
 * @property String $Notes Notes
 * @property Guid $Project Reference to project
 * @property String $ProjectCode Project code
 * @property String $ProjectDescription Description of the project
 * @property Double $ProjectedStock The current stock level + the planned quantity to be received - the planned quantity to deliver shown in stock unit.
 * @property Guid $PurchaseOrderID Identifies the purchase order. All the lines of a purchase order have the same PurchaseOrderID
 * @property Double $Quantity Quantity for the item that needs to be invoiced
 * @property Boolean $Rebill Indicates whether the purchase order line needs to be rebilled
 * @property DateTime $ReceiptDate Date the goods are expected to be received
 * @property Double $ReceivedQuantity Quantity of goods received
 * @property Guid $SalesOrder Sales order that is linked to a back to back sales order in purchase order
 * @property Guid $SalesOrderLine Sales order line of the sales order that is linked to a back to back sales order in purchase order
 * @property Int32 $SalesOrderLineNumber Number of the sales order line
 * @property Int32 $SalesOrderNumber Number of the sales order
 * @property String $SupplierItemCode Code the supplier uses for this item
 * @property String $Unit Code of item unit
 * @property String $UnitDescription Description of unit
 * @property Double $UnitPrice Item price per unit
 * @property Double $VATAmount Amount of VAT charges calculated from total amount and vat percentage
 * @property String $VATCode The VAT code used when the invoice was registered
 * @property String $VATDescription Description of vat code
 * @property Double $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 */
class PurchaseOrderLine extends Model
{
    use Query\Findable;

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
        'VATPercentage'
    ];

    protected $url = 'purchaseorder/PurchaseOrderLines';

}

<?php namespace Picqer\Financials\Exact;

/**
 * Class PurchaseOrderLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseOrderLines
 *
 * @property Edm.Guid $ID  Primary key
 * @property Edm.Double $AmountDC Amount in the default currency of the company
 * @property Edm.Double $AmountFC Amount in the currency of the transaction
 * @property Edm.String $CostCenter Reference to Cost center
 * @property Edm.String $CostCenterDescription Description of CostCenter
 * @property Edm.String $CostUnit Reference to Cost unit
 * @property Edm.String $CostUnitDescription Description of CostUnit
 * @property Edm.DateTime $Created Creation date
 * @property Edm.Guid $Creator User ID of creator
 * @property Edm.String $CreatorFullName Name of creator
 * @property Edm.String $Description Description of the purchase order line
 * @property Edm.Double $Discount Discount in percentage for item
 * @property Edm.Int32 $Division Division code
 * @property Edm.Guid $Expense Expense related to the Work Breakdown Structure of the selected project. Only available with a professional service license
 * @property Edm.String $ExpenseDescription Description of expense. Only available with a professional service license
 * @property Edm.Double $InStock The current stock level of items shown in stock unit. The information is displayed only for items with the stock property selected.
 * @property Edm.Double $InvoicedQuantity Quantity of item that has been invoiced
 * @property Edm.Guid $Item Reference to the item for purchase order
 * @property Edm.String $ItemCode Item code
 * @property Edm.String $ItemDescription Description of item
 * @property Edm.Boolean $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property Edm.Int32 $LineNumber Line number
 * @property Edm.DateTime $Modified Last modified date
 * @property Edm.Guid $Modifier User ID of modifier
 * @property Edm.String $ModifierFullName Name of modifier
 * @property Edm.Double $NetPrice The net price is the unit price (VAT code taken into account) with any discount applied
 * @property Edm.String $Notes Notes
 * @property Edm.Guid $Project Reference to project. Only available with a professional service license
 * @property Edm.String $ProjectCode Project code. Only available with a professional service license
 * @property Edm.String $ProjectDescription Description of the project. Only available with a professional service license
 * @property Edm.Double $ProjectedStock The current stock level + the planned quantity to be received - the planned quantity to deliver shown in stock unit.
 * @property Edm.Guid $PurchaseOrderID Identifies the purchase order. All the lines of a purchase order have the same PurchaseOrderID
 * @property Edm.Double $Quantity Quantity in item units
 * @property Edm.Double $QuantityInPurchaseUnits Quantity in purchase units. Use this field when creating a purchase order
 * @property Edm.Boolean $Rebill Indicates whether the purchase order line needs to be rebilled. Only available with a professional service license
 * @property Edm.DateTime $ReceiptDate Date the goods are expected to be received
 * @property Edm.Double $ReceivedQuantity Quantity of goods received
 * @property Edm.Guid $SalesOrder Sales order that is linked to a back to back sales order in purchase order
 * @property Edm.Guid $SalesOrderLine Sales order line of the sales order that is linked to a back to back sales order in purchase order
 * @property Edm.Int32 $SalesOrderLineNumber Number of the sales order line
 * @property Edm.Int32 $SalesOrderNumber Number of the sales order
 * @property Edm.String $SupplierItemCode Code the supplier uses for this item
 * @property Edm.String $Unit Code of item unit
 * @property Edm.String $UnitDescription Description of unit
 * @property Edm.Double $UnitPrice Item price per purchase unit
 * @property Edm.Double $VATAmount Amount of VAT charges calculated from total amount and vat percentage
 * @property Edm.String $VATCode The VAT code used when the invoice was registered
 * @property Edm.String $VATDescription Description of vat code
 * @property Edm.Double $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
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

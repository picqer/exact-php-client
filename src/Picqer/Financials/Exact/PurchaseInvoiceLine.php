<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseInvoiceLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchasePurchaseInvoiceLines
 *
 * @property string $ID A guid that uniqely identifies the invoice line.
 * @property float $Amount In a GET request the line amount is always returned excluding VAT.In a POST request the line amount has to be submitted either including or excluding the VAT amount. This depends on the type (including or excluding) of the VAT code.
 * @property string $CostCenter The code of the cost center that is linked to this invoice line.
 * @property string $CostUnit The code of the cost unit that is linked to this invoice line.
 * @property string $Currency The currency of the line amount. The total invoice amount and all individual line amounts are in the same currency.
 * @property string $Description Description of the invoice line.
 * @property float $Discount The discount given on the default price. A value of 0.1 translates to 10% discount.
 * @property string $Expense Expense related to the Work Breakdown Structure of the selected project. Only available with a professional service license
 * @property string $ExpenseDescription Description of expense. Only available with a professional service license
 * @property string $InvoiceID The unique identifier of the purchase invoice this line belongs to.
 * @property int $InvoiceType Purchase invoice type.
 * @property string $Item Guid that identifies the purchase item. In a POST request either the Item or the PurchaseOrderLine has to be supplied.
 * @property string $ItemUnit The default unit of the purchased item.
 * @property int $LineNumber The sequence number of the line.
 * @property string $Modified The date and time the invoice line was last modified.
 * @property float $NetPrice The net price that has to be paid per unit. NetPrice = UnitPrice * (1.0 - Discount).Depending on the type of the VAT code the net price is including or excluding VAT.
 * @property string $Notes The user can enter notes related to the invoice line here.
 * @property string $Project The project linked to the purchase invoice line. This field is only applicable for Manufacturing and Professional Services.
 * @property string $PurchaseOrderLine Guid that identifies the purchase order line that is being invoiced. When doing a POST either the Item or the PurchaseOrderLine has to be supplied.The values of the purchase order line such as Quantity, Item and Amount will be copied to the purchase invoice line.
 * @property float $Quantity The number of purchased items in purchase units. The purchase unit is defined on the item card and it can also be found using the logistics/SupplierItem api endpoint.For divisible items the quantity can be a fractional number, otherwise it is an integer.
 * @property float $QuantityInDefaultUnits The number of purchased items in default units. An item has both a default unit and a purchase unit, for example piece and box with a box containing 12 pieces. The multiplication factor (12 in this example) between the default unit and purchase unit is maintained on the item card. When you GET a purchase invoice line for 1 box of items the field Quantity = 1 and QuantityInDefaultUnits = 12.
 * @property bool $Rebill Indicates whether the purchase invoice line needs to be rebilled. Only available with a professional service license
 * @property string $Unit The code of the unit in which the item is purchased. For example piece, box or kg. The value is taken from the purchase unit in the item card.
 * @property float $UnitPrice The default purchase price per unit.Depending on the type of the VAT code the unit price is including or excluding VAT.
 * @property float $VATAmount The VAT amount of the invoice line.
 * @property string $VATCode The VAT code used for the invoice line.
 * @property float $VATPercentage The VAT percentage.
 */
class PurchaseInvoiceLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Amount',
        'CostCenter',
        'CostUnit',
        'Currency',
        'Description',
        'Discount',
        'Expense',
        'ExpenseDescription',
        'InvoiceID',
        'InvoiceType',
        'Item',
        'ItemUnit',
        'LineNumber',
        'Modified',
        'NetPrice',
        'Notes',
        'Project',
        'PurchaseOrderLine',
        'Quantity',
        'QuantityInDefaultUnits',
        'Rebill',
        'Unit',
        'UnitPrice',
        'VATAmount',
        'VATCode',
        'VATPercentage',
    ];

    protected $url = 'purchase/PurchaseInvoiceLines';
}

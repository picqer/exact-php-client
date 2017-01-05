<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesInvoiceLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesInvoiceLines
 * 
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property Double $AmountFC For normal lines it's the amount excluding VAT
 * @property String $CostCenter Reference to Cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property String $CostUnit Reference to Cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property DateTime $DeliveryDate Delivery date of an item in a sales invoice. This is used for VAT on prepayments, only if sales order is not used in the license.
 * @property String $Description Description. Can be different for header and lines
 * @property Double $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property Int32 $Division Division code
 * @property Guid $Employee Link to Employee originating from time and cost transactions
 * @property String $EmployeeFullName Name of employee
 * @property DateTime $EndTime EndTime is used to store the last date of a period. EndTime is used in combination with StartTime
 * @property Double $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property Double $ExtraDutyPercentage Extra duty percentage
 * @property Guid $GLAccount The GL Account of the sales invoice line. This field is mandatory. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property String $GLAccountDescription Description of GLAccount
 * @property Guid $InvoiceID The InvoiceID identifies the sales invoice. All the lines of a sales invoice have the same InvoiceID
 * @property Guid $Item Reference to the item that is sold in this sales invoice line
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of Item
 * @property Int32 $LineNumber Indicates the sequence of the lines within one invoice
 * @property Double $NetPrice Net price of the sales invoice line
 * @property String $Notes Extra notes
 * @property Guid $Pricelist Price list
 * @property String $PricelistDescription Description of Pricelist
 * @property Guid $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property Guid $SalesOrder Identifies the sales order this invoice line is based on
 * @property Guid $SalesOrderLine Identifies the sales order line this sales invoice line is based on
 * @property Int32 $SalesOrderLineNumber Then line number of the sales order line on which this invoice line is based on
 * @property Int32 $SalesOrderNumber The order number of the sales order on which this invoice line is based on
 * @property DateTime $StartTime StartTime is used to store the first date of a period. StartTime is used in combination with EndTime
 * @property Guid $Subscription When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property String $SubscriptionDescription Description of Subscription
 * @property Guid $TaxSchedule Tax schedule linked
 * @property String $TaxScheduleCode Code of the tax schedule
 * @property String $TaxScheduleDescription Description of the tax schedule
 * @property String $UnitCode Code of Unit
 * @property String $UnitDescription Description of Unit
 * @property Double $UnitPrice Price per unit
 * @property Double $VATAmountDC VAT amount in the default currency of the company
 * @property Double $VATAmountFC VAT amount in the currency of the transaction
 * @property String $VATCode The VAT code that is used when the invoice is registered
 * @property String $VATCodeDescription Description of VATCode
 * @property Double $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesInvoiceLine extends Model
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
        'DeliveryDate',
        'Description',
        'Discount',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EndTime',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'GLAccount',
        'GLAccountDescription',
        'InvoiceID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'NetPrice',
        'Notes',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'Quantity',
        'SalesOrder',
        'SalesOrderLine',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'StartTime',
        'Subscription',
        'SubscriptionDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountDC',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage'
    ];

    protected $url = 'salesinvoice/SalesInvoiceLines';

}

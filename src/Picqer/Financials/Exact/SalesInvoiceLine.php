<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesInvoiceLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesinvoiceSalesInvoiceLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property float $AmountFC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Description Description of CostCenter
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $Division Division code
 * @property string $Employee Link to Employee originating from time and cost transactions
 * @property string $EmployeeFullName Name of employee
 * @property string $EndTime EndTime is used to store the last date of a period. EndTime is used in combination with StartTime
 * @property string $GLAccount The GL Account of the sales invoice line. This field is mandatory. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $InvoiceID The InvoiceID identifies the sales invoice. All the lines of a sales invoice have the same InvoiceID
 * @property string $Item Reference to the item that is sold in this sales invoice line
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property int $LineNumber Indicates the sequence of the lines within one invoice
 * @property float $NetPrice Net price of the sales invoice line
 * @property string $Notes Extra notes
 * @property string $Pricelist Price list
 * @property string $PricelistDescription Description of Pricelist
 * @property string $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $StartTime EndTime is used to store the last date of a period. EndTime is used in combination with StartTime
 * @property string $Subscription Obsolete. When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $TaxSchedule Tax schedule linked
 * @property string $TaxScheduleCode Code of the tax schedule
 * @property string $TaxScheduleDescription Description of the tax schedule
 * @property string $UnitCode Code of Unit
 * @property string $UnitDescription Description of CostUnit
 * @property float $UnitPrice Price per unit
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the invoice is registered
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
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
        'Description',
        'Discount',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EndTime',
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
        'VATPercentage',
    ];

    protected $url = 'salesinvoice/SalesInvoiceLines';
}

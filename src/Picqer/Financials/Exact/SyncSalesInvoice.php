<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSalesInvoice.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncSalesInvoiceSalesInvoices
 *
 * @property int $Timestamp Timestamp
 * @property float $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property float $AmountDiscount Discount amount in the default currency of the company. Only supported for header
 * @property float $AmountDiscountExclVat Discount amount exclude VAT in the default currency of the company. Only supported for header
 * @property float $AmountFC For normal lines it's the amount excluding VAT
 * @property float $AmountFCExclVat Sum of all lines, excluding VAT. Only supported for header
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency for the invoice. Default this is the currency of the administration
 * @property string $CustomerItemCode Code the customer uses for this item
 * @property string $DeliverTo Delivery account for invoice
 * @property string $DeliverToAddress Address of delivery as per invoice delivery account
 * @property string $DeliverToContactPerson Delivery account person for invoice
 * @property string $DeliverToContactPersonFullName Name of delivery account's contact person as per invoice
 * @property string $DeliverToName Name of the delivery account's customer as per invoice
 * @property string $DeliveryDate Delivery date of an item in a sales invoice. This is used for VAT on prepayments, only if sales order is not used in the license.
 * @property string $Description Description. Can be different for header and lines
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $DiscountType Leading field of total discount. 1=Discount percentage, 2=Discount amount excl. VAT, 3=Discount amount incl. VAT, 4=Total amount excl. VAT, 5=Total amount incl. VAT
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the invoice
 * @property int $DocumentNumber Number of the document
 * @property string $DocumentSubject Subject of the document
 * @property string $DueDate The due date for payments. This date is calculated based on the EntryDate and the Paymentcondition
 * @property string $Employee Link to Employee originating from time and cost transactions
 * @property string $EmployeeFullName Name of employee
 * @property string $EndTime EndTime is used to store the last date of a period. EndTime is used in combination with StartTime
 * @property float $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property float $GAccountAmountFC A positive value of the amount indicates that the amount is to be paid by the customer to your G bank account.In case of a credit invoice the amount should have negative value when retrieved or posted to Exact.
 * @property string $GLAccount The GL Account of the sales invoice line. This field is mandatory. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $ID Primary key
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property string $InvoiceDate Official date for the invoice. When the invoice is entered it's equal to the field 'EntryDate'. During the printing process the invoice date can be entered
 * @property string $InvoiceID The InvoiceID identifies the sales invoice. All the lines of a sales invoice have the same InvoiceID
 * @property int $InvoiceNumber Assigned at entry or at printing depending on setting. The number assigned is based on the freenumbers as defined for the Journal. When printing the field InvoiceNumber is copied to the fields EntryNumber and InvoiceNumber of the sales entry
 * @property string $InvoiceTo Reference to the Customer who will receive the invoice
 * @property string $InvoiceToContactPerson Reference to the Contact person of the customer who will receive the invoice
 * @property string $InvoiceToContactPersonFullName Name of the contact person of the customer who will receive the invoice
 * @property string $InvoiceToName Name of the customer who will receive the invoice
 * @property bool $IsExtraDuty Indicates whether the invoice has extra duty
 * @property string $Item Reference to the item that is sold in this sales invoice line
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property string $Journal The journal code. Every invoice should be linked to a sales journal
 * @property string $JournalDescription Description of Journal
 * @property int $LineNumber Indicates the sequence of the lines within one invoice
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NetPrice Net price of the sales invoice line
 * @property string $Notes Extra notes
 * @property string $OrderDate Order date
 * @property string $OrderedBy Customer who ordered the invoice
 * @property string $OrderedByContactPerson Contact person of customer who ordered the invoice
 * @property string $OrderedByContactPersonFullName Name of contact person of customer who ordered the invoice
 * @property string $OrderedByName Name of customer who ordered the invoice
 * @property int $OrderNumber Number to identify the order. By default the number is based on a setting for the first free number, but you can post your own number.
 * @property string $PaymentCondition The payment condition used for due date and discount calculation
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property string $PaymentReference Payment reference for sales invoice
 * @property string $Pricelist Price list
 * @property string $PricelistDescription Description of Pricelist
 * @property string $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property string $ProjectWBS WBS linked to the sales invoice
 * @property string $ProjectWBSDescription Description of WBS
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $Remarks Extra remarks
 * @property string $SalesChannel ID of Sales channel.
 * @property string $SalesChannelCode Code of Sales channel.
 * @property string $SalesChannelDescription Description of Sales channel.
 * @property string $SalesOrder Identifies the sales order this invoice line is based on
 * @property string $SalesOrderLine Identifies the sales order line this sales invoice line is based on
 * @property int $SalesOrderLineNumber Then line number of the sales order line on which this invoice line is based on
 * @property int $SalesOrderNumber The order number of the sales order on which this invoice line is based on
 * @property string $Salesperson Sales representative
 * @property string $SalespersonFullName Name of sales representative
 * @property int $StarterSalesInvoiceStatus Starter Sales invoice status (for starter functionality)
 * @property string $StarterSalesInvoiceStatusDescription Description of StarterSalesInvoiceStatus
 * @property string $StartTime StartTime is used to store the first date of a period. StartTime is used in combination with EndTime
 * @property int $Status The status of the entry. 10 = draft. During the creation of an invoice draft records occur in the draft modus if during an invoice a new page with lines is triggered. If the user leaves the invoice in an abnormal way the draft invoices can be recovered. Draft invoices are not included in financial reports, balances etc. 20 = open. Open invoices can be changed. New invoices get the status open by default. 50 = processed. Processed invoices can't be changed anymore. Processing is done via printing. Processed invoices can't be reopened
 * @property string $StatusDescription Description of Status
 * @property string $Subscription When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property string $SubscriptionDescription Description of subscription line
 * @property int $Type Indicates the type of invoice Values: 8020 - Sales invoices, 8021 - Sales credit note, 8023 - Direct sales invoice, 8024 - Direct credit note. Type 8023 and 8024 are only supported by the Plus, Professional and Premium for Wholesale & Distribution and Manufacturing
 * @property string $TypeDescription Description of the type
 * @property string $UnitCode Code of Unit
 * @property string $UnitDescription Description of Unit
 * @property float $UnitPrice Price per unit
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the invoice is registered
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 * @property string $Warehouse Mandatory for direct sales invoice/credit note, cannot be set for normal sales invoice/credit note.
 * @property float $WithholdingTaxAmountFC Withholding tax amount applied to sales invoice. Not supported in The Netherlands.
 * @property float $WithholdingTaxBaseAmount Withholding tax base amount to calculate withholding amount. Not supported in The Netherlands.
 * @property float $WithholdingTaxPercentage Withholding tax percentage applied to sales invoice. Not supported in The Netherlands.
 * @property string $YourRef The invoice number of the customer
 */
class SyncSalesInvoice extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountDC',
        'AmountDiscount',
        'AmountDiscountExclVat',
        'AmountFC',
        'AmountFCExclVat',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomerItemCode',
        'DeliverTo',
        'DeliverToAddress',
        'DeliverToContactPerson',
        'DeliverToContactPersonFullName',
        'DeliverToName',
        'DeliveryDate',
        'Description',
        'Discount',
        'DiscountType',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'Employee',
        'EmployeeFullName',
        'EndTime',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'GAccountAmountFC',
        'GLAccount',
        'GLAccountDescription',
        'ID',
        'IncotermAddress',
        'IncotermCode',
        'IncotermVersion',
        'InvoiceDate',
        'InvoiceID',
        'InvoiceNumber',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'IsExtraDuty',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Journal',
        'JournalDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NetPrice',
        'Notes',
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentReference',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'ProjectWBS',
        'ProjectWBSDescription',
        'Quantity',
        'Remarks',
        'SalesChannel',
        'SalesChannelCode',
        'SalesChannelDescription',
        'SalesOrder',
        'SalesOrderLine',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'Salesperson',
        'SalespersonFullName',
        'StarterSalesInvoiceStatus',
        'StarterSalesInvoiceStatusDescription',
        'StartTime',
        'Status',
        'StatusDescription',
        'Subscription',
        'SubscriptionDescription',
        'Type',
        'TypeDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountDC',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'Warehouse',
        'WithholdingTaxAmountFC',
        'WithholdingTaxBaseAmount',
        'WithholdingTaxPercentage',
        'YourRef',
    ];

    protected $url = 'sync/SalesInvoice/SalesInvoices';
}

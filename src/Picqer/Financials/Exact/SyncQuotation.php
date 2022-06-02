<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncCRMQuotations
 *
 * @property int $Timestamp Timestamp
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountDiscount Discount amount in the currency of the transaction
 * @property float $AmountDiscountExclVat Discount amount excluding VAT in the currency of the transaction
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CloseDate Date on which the customer accepted or rejected the quotation version
 * @property string $ClosingDate Date on which you expect to close/win the deal
 * @property string $Created Date and time on which the quotation was created
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency The currency of the quotation
 * @property string $CustomerItemCode Code the customer uses for this item
 * @property string $DeliveryAccount The account where the items should delivered
 * @property string $DeliveryAccountCode The code of the delivery account
 * @property string $DeliveryAccountContact The contact person of the delivery account
 * @property string $DeliveryAccountContactFullName Full name of the delivery account contact person
 * @property string $DeliveryAccountName The name of the delivery account
 * @property string $DeliveryAddress The id of the delivery address
 * @property string $Description By default this contains the item description
 * @property float $Discount Discount given on the default price. This is stored as a fraction. ie 5.5% is stored as .055
 * @property int $Division Division code
 * @property string $Document Document linked to the quotation
 * @property string $DocumentSubject The subject of the document
 * @property string $DueDate Date after which the quotation is no longer valid
 * @property string $ID Primary key
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property string $InvoiceAccount The account to which the invoice is sent
 * @property string $InvoiceAccountCode The code of the invoice account
 * @property string $InvoiceAccountContact The contact person of the invoice account
 * @property string $InvoiceAccountContactFullName Full name of the invoice account contact person
 * @property string $InvoiceAccountName The name of the invoice account
 * @property string $Item Reference to the item that is sold in this quotation line
 * @property string $ItemDescription Description of the item
 * @property int $LineNumber Indicates the sequence of the lines within one quotation
 * @property string $Modified Date and time on which the quotation was last modified
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
 * @property float $NetPrice Net price of the quotation line
 * @property string $Notes Extra notes
 * @property string $Opportunity Opportunity linked to the quotation
 * @property string $OpportunityName The name of the opportunity
 * @property string $OrderAccount The account that requested the quotation
 * @property string $OrderAccountCode The code of the order account
 * @property string $OrderAccountContact The contact person of the order account
 * @property string $OrderAccountContactFullName Full name of the order account contact person
 * @property string $OrderAccountName The name of the order account
 * @property string $PaymentCondition Payment condition code
 * @property string $PaymentConditionDescription Payment condition description
 * @property string $Project The project linked to the quotation
 * @property string $ProjectCode The code of the project
 * @property string $ProjectDescription The description of the project
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $QuotationDate Date on which the quotation version is entered or printed. Both during entering and printing this date can be adjusted
 * @property string $QuotationID Identifies the quotation. All the lines of a quotation have the same QuotationID
 * @property int $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property string $Remarks Extra text that can be added to the quotation
 * @property string $SalesChannel ID of Sales channel.
 * @property string $SalesChannelCode Code of Sales channel.
 * @property string $SalesChannelDescription Description of Sales channel.
 * @property string $SalesPerson The user that is responsible for the quotation version
 * @property string $SalesPersonFullName Full name of the sales person
 * @property string $ShippingMethod Shipping method ID
 * @property string $ShippingMethodDescription Shipping method description
 * @property int $Status The status of the quotation version. 5 = Rejected, 6 = Reviewed and closed, 10 = Recovery, 20 = Draft, 25 = Open, 35 = Processing... , 40 = Printed, 50 = Accepted
 * @property string $StatusDescription The description of the status
 * @property string $UnitCode Code of the item unit
 * @property string $UnitDescription Description of the item unit
 * @property float $UnitPrice Price per item unit
 * @property float $VATAmountFC VAT amount of the line in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the quotation is invoiced
 * @property string $VATDescription Description of the VAT code
 * @property float $VATPercentage The VAT percentage of the VAT code
 * @property int $VersionNumber Number indicating the different reviews which are made for the quotation
 * @property string $YourRef The number by which this quotation is identified by the order account
 */
class SyncQuotation extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountDC',
        'AmountDiscount',
        'AmountDiscountExclVat',
        'AmountFC',
        'CloseDate',
        'ClosingDate',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomerItemCode',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountContact',
        'DeliveryAccountContactFullName',
        'DeliveryAccountName',
        'DeliveryAddress',
        'Description',
        'Discount',
        'Division',
        'Document',
        'DocumentSubject',
        'DueDate',
        'ID',
        'IncotermAddress',
        'IncotermCode',
        'IncotermVersion',
        'InvoiceAccount',
        'InvoiceAccountCode',
        'InvoiceAccountContact',
        'InvoiceAccountContactFullName',
        'InvoiceAccountName',
        'Item',
        'ItemDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NetPrice',
        'Notes',
        'Opportunity',
        'OpportunityName',
        'OrderAccount',
        'OrderAccountCode',
        'OrderAccountContact',
        'OrderAccountContactFullName',
        'OrderAccountName',
        'PaymentCondition',
        'PaymentConditionDescription',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'Quantity',
        'QuotationDate',
        'QuotationID',
        'QuotationNumber',
        'Remarks',
        'SalesChannel',
        'SalesChannelCode',
        'SalesChannelDescription',
        'SalesPerson',
        'SalesPersonFullName',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountFC',
        'VATCode',
        'VATDescription',
        'VATPercentage',
        'VersionNumber',
        'YourRef',
    ];

    protected $url = 'sync/CRM/Quotations';
}

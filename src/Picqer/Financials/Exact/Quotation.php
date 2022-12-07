<?php

namespace Picqer\Financials\Exact;

/**
 * Class Quotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMQuotations
 *
 * @property string $QuotationID Identifier of the quotation
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountDiscount Discount Amount in the currency of the transaction
 * @property float $AmountDiscountExclVat Discount Amount excluding VAT in the currency of the transaction
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $CloseDate Date on which the customer accepted or rejected the quotation version
 * @property string $ClosingDate Date on which you expect to close/win the deal
 * @property string $Created Date and time on which the quotation was created
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency The currency of the quotation
 * @property string $DeliveryAccount The account where the items should delivered
 * @property string $DeliveryAccountCode The code of the delivery account
 * @property string $DeliveryAccountContact The contact person of the delivery account
 * @property string $DeliveryAccountContactFullName Full name of the delivery account contact person
 * @property string $DeliveryAccountName The name of the delivery account
 * @property string $DeliveryAddress The id of the delivery address
 * @property string $DeliveryDate The date of the delivery
 * @property string $Description The description of the quotation
 * @property int $Division Division code
 * @property string $Document Document linked to the quotation
 * @property string $DocumentSubject The subject of the document
 * @property string $DueDate Date after which the quotation is no longer valid
 * @property string $IncotermAddress Address of Incoterm
 * @property string $IncotermCode Code of Incoterm
 * @property int $IncotermVersion Version of Incoterm Supported version for Incoterms : 2010, 2020
 * @property string $InvoiceAccount The account to which the invoice is sent
 * @property string $InvoiceAccountCode The code of the invoice account
 * @property string $InvoiceAccountContact The contact person of the invoice account
 * @property string $InvoiceAccountContactFullName Full name of the invoice account contact person
 * @property string $InvoiceAccountName The name of the invoice account
 * @property string $Modified Date and time on which the quotation was last modified
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
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
 * @property string $QuotationDate Date on which the quotation version is entered or printed. Both during entering and printing this date can be adjusted
 * @property QuotationLine[] $QuotationLines The collection of quotation lines
 * @property int $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property QuotationOrderChargeLine[] $QuotationOrderChargeLines Collection of shipping cost and order charge lines. Only applicable in POST. Ignore the URL returns in GET.
 * @property string $Remarks Extra text that can be added to the quotation
 * @property string $SalesChannel ID of Sales channel.
 * @property string $SalesChannelCode Code of Sales channel.
 * @property string $SalesChannelDescription Description of Sales channel.
 * @property string $SalesPerson The user that is responsible for the quotation version
 * @property string $SalesPersonFullName Full name of the sales person
 * @property string $SelectionCode ID of selection code. Only supported by the Plus, Professional and Premium for Wholesale & Distribution and Manufacturing
 * @property string $SelectionCodeCode Code of selection code
 * @property string $SelectionCodeDescription Description of selection code
 * @property string $ShippingMethod Shipping method ID
 * @property string $ShippingMethodDescription Shipping method description
 * @property int $Status The status of the quotation version. 5 = Rejected, 6 = Reviewed and closed, 10 = Recovery, 20 = Draft, 25 = Open, 35 = Processing... , 40 = Printed, 50 = Accepted, 60 = Awaiting online acceptance, 70 = Accepted but an error occurred during processing
 * @property string $StatusDescription The description of the status
 * @property float $VATAmountFC Total VAT amount in the currency of the transaction
 * @property int $VersionNumber Number indicating the different reviews which are made for the quotation
 * @property string $YourRef The number by which this quotation is identified by the order account
 */
class Quotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
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
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountContact',
        'DeliveryAccountContactFullName',
        'DeliveryAccountName',
        'DeliveryAddress',
        'DeliveryDate',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'DueDate',
        'IncotermAddress',
        'IncotermCode',
        'IncotermVersion',
        'InvoiceAccount',
        'InvoiceAccountCode',
        'InvoiceAccountContact',
        'InvoiceAccountContactFullName',
        'InvoiceAccountName',
        'Modified',
        'Modifier',
        'ModifierFullName',
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
        'QuotationDate',
        'QuotationLines',
        'QuotationNumber',
        'QuotationOrderChargeLines',
        'Remarks',
        'SalesChannel',
        'SalesChannelCode',
        'SalesChannelDescription',
        'SalesPerson',
        'SalesPersonFullName',
        'SelectionCode',
        'SelectionCodeCode',
        'SelectionCodeDescription',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'VATAmountFC',
        'VersionNumber',
        'YourRef',
    ];

    protected $url = 'crm/Quotations';

    /**
     * @param array $array
     */
    public function addItem(array $array)
    {
        if (! isset($this->attributes['QuotationLines']) || $this->attributes['QuotationLines'] == null) {
            $this->attributes['QuotationLines'] = [];
        }
        if (! isset($array['LineNumber'])) {
            $array['LineNumber'] = count($this->attributes['QuotationLines']) + 1;
        }
        $this->attributes['QuotationLines'][] = $array;
    }
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class Quotation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMQuotations
 *
 * @property Guid $QuotationID Identifier of the quotation
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property DateTime $CloseDate Date on which the customer accepted or rejected the quotation version
 * @property DateTime $ClosingDate Date on which you expect to close/win the deal
 * @property DateTime $Created Date and time on which the quotation was created
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Currency The currency of the quotation
 * @property Guid $DeliveryAccount The account where the items should delivered
 * @property String $DeliveryAccountCode The code of the delivery account
 * @property Guid $DeliveryAccountContact The contact person of the delivery account
 * @property String $DeliveryAccountContactFullName Full name of the delivery account contact person
 * @property String $DeliveryAccountName The name of the delivery account
 * @property Guid $DeliveryAddress The id of the delivery address
 * @property String $Description The description of the quotation
 * @property Int32 $Division Division code
 * @property Guid $Document Document linked to the quotation
 * @property String $DocumentSubject The subject of the document
 * @property DateTime $DueDate Date after which the quotation is no longer valid
 * @property Guid $InvoiceAccount The account to which the invoice is sent
 * @property String $InvoiceAccountCode The code of the invoice account
 * @property Guid $InvoiceAccountContact The contact person of the invoice account
 * @property String $InvoiceAccountContactFullName Full name of the invoice account contact person
 * @property String $InvoiceAccountName The name of the invoice account
 * @property DateTime $Modified Date and time on which the quotation was last modified
 * @property Guid $Modifier User ID of the modifier
 * @property String $ModifierFullName Name of the modifier
 * @property Guid $Opportunity Opportunity linked to the quotation
 * @property String $OpportunityName The name of the opportunity
 * @property Guid $OrderAccount The account that requested the quotation
 * @property String $OrderAccountCode The code of the order account
 * @property Guid $OrderAccountContact The contact person of the order account
 * @property String $OrderAccountContactFullName Full name of the order account contact person
 * @property String $OrderAccountName The name of the order account
 * @property Guid $Project The project linked to the quotation
 * @property String $ProjectCode The code of the project
 * @property String $ProjectDescription The description of the project
 * @property DateTime $QuotationDate Date on which the quotation version is entered or printed. Both during entering and printing this date can be adjusted
 * @property QuotationLines $QuotationLines The collection of quotation lines
 * @property Int32 $QuotationNumber Unique number to indentify the quotation. By default this number is based on the setting for first available number
 * @property String $Remarks Extra text that can be added to the quotation
 * @property Guid $SalesPerson The user that is responsible for the quotation version
 * @property String $SalesPersonFullName Full name of the sales person
 * @property Int16 $Status The status of the quotation version. 5 = Rejected, 6 = Reviewed and closed, 10 = Recovery, 20 = Draft, 25 = Open, 35 = Processing... , 40 = Printed, 50 = Accepted
 * @property String $StatusDescription The description of the status
 * @property Double $VATAmountFC Total VAT amount in the currency of the transaction
 * @property Int32 $VersionNumber Number indicating the different reviews which are made for the quotation
 * @property String $YourRef The number by which this quotation is identified by the order account
 */
class Quotation extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'AmountDC',
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
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'DueDate',
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
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'QuotationDate',
        'QuotationLines',
        'QuotationNumber',
        'Remarks',
        'SalesPerson',
        'SalesPersonFullName',
        'Status',
        'StatusDescription',
        'VATAmountFC',
        'VersionNumber',
        'YourRef',
    ];

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

    protected $url = 'crm/Quotations';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseEntryPurchaseEntryLines
 *
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property Guid $Asset Reference to asset
 * @property String $AssetDescription Asset description
 * @property String $CostCenter Reference to cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property String $CostUnit Reference to cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Guid $EntryID Reference to header of the purchase entry
 * @property DateTime $From From date for deferred revenue
 * @property Guid $GLAccount General ledger account
 * @property String $GLAccountCode Code of GLAccount
 * @property String $GLAccountDescription Description of GLAccount
 * @property String $IntraStatArea IntraStat area
 * @property String $IntraStatCountry IntraStatCountry
 * @property String $IntraStatDeliveryTerm IntraStat delivery term
 * @property String $IntraStatTransactionA IntraStat transaction a
 * @property String $IntraStatTransportMethod IntraStat transport method
 * @property Int32 $LineNumber Line number
 * @property String $Notes Extra remarks
 * @property Guid $Project Reference to project
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity Quantity
 * @property String $SerialNumber Serial number
 * @property Double $StatisticalNetWeight Statistical NetWeight
 * @property String $StatisticalNumber Statistical Number
 * @property Double $StatisticalQuantity Statistical Quantity
 * @property Double $StatisticalValue Statistical Value
 * @property Guid $Subscription Reference to subscription
 * @property String $SubscriptionDescription Description of Subscription
 * @property DateTime $To To date for deferred revenue
 * @property Guid $TrackingNumber Reference to tracking number
 * @property String $TrackingNumberDescription Description of TrackingNumber
 * @property Int32 $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property Double $VATAmountDC VAT amount in the default currency of the company
 * @property Double $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated.
 * @property Double $VATBaseAmountDC VAT base amount in the default currency of the company
 * @property Double $VATBaseAmountFC VAT base amount in the currency of the transaction
 * @property String $VATCode VAT code
 * @property String $VATCodeDescription Description of VATCode
 * @property Double $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non decuctible part. This is used during the entry of purchase invoices.
 * @property Double $VATPercentage VAT percentage
 * @property Double $WithholdingAmountDC Withholding tax amount for spanish legislation
 * @property String $WithholdingTax Withholding tax key for spanish legislation
 */
class PurchaseEntryLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'Asset',
        'AssetDescription',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Description',
        'Division',
        'EntryID',
        'From',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'IntraStatArea',
        'IntraStatCountry',
        'IntraStatDeliveryTerm',
        'IntraStatTransactionA',
        'IntraStatTransportMethod',
        'LineNumber',
        'Notes',
        'Project',
        'ProjectDescription',
        'Quantity',
        'SerialNumber',
        'StatisticalNetWeight',
        'StatisticalNumber',
        'StatisticalQuantity',
        'StatisticalValue',
        'Subscription',
        'SubscriptionDescription',
        'To',
        'TrackingNumber',
        'TrackingNumberDescription',
        'Type',
        'VATAmountDC',
        'VATAmountFC',
        'VATBaseAmountDC',
        'VATBaseAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATNonDeductiblePercentage',
        'VATPercentage',
        'WithholdingAmountDC',
        'WithholdingTax',
    ];

    protected $url = 'purchaseentry/PurchaseEntryLines';

}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseEntryLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseEntryPurchaseEntryLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Asset Reference to asset
 * @property string $AssetDescription Asset description
 * @property string $CostCenter Reference to cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $EntryID Reference to header of the purchase entry
 * @property string $From From date for deferred revenue
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $IntraStatArea IntraStat area
 * @property string $IntraStatCountry IntraStatCountry
 * @property string $IntraStatDeliveryTerm IntraStat delivery term
 * @property string $IntraStatTransactionA IntraStat transaction a
 * @property string $IntraStatTransportMethod IntraStat transport method
 * @property int $LineNumber Line number
 * @property string $Notes Extra remarks
 * @property float $PrivateUsePercentage Percentage of re-invoice part of a cost to the owner of the company.
 * @property string $Project Reference to project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity
 * @property string $SerialNumber Serial number
 * @property float $StatisticalNetWeight Statistical NetWeight
 * @property string $StatisticalNumber Statistical Number
 * @property float $StatisticalQuantity Statistical Quantity
 * @property float $StatisticalValue Statistical Value
 * @property string $Subscription Reference to subscription
 * @property string $SubscriptionDescription Description of Subscription
 * @property string $To To date for deferred revenue
 * @property string $TrackingNumber Reference to tracking number
 * @property string $TrackingNumberDescription Description of TrackingNumber
 * @property int $Type Type: 30 = Purchase entry, 31 = Purchase credit note
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated.
 * @property float $VATBaseAmountDC VAT base amount in the default currency of the company
 * @property float $VATBaseAmountFC VAT base amount in the currency of the transaction
 * @property string $VATCode VAT code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATNonDeductiblePercentage If not the full amount of the VAT is deductible, you can indicate a percentage for the non decuctible part. This is used during the entry of purchase invoices.
 * @property float $VATPercentage VAT percentage
 * @property float $WithholdingAmountDC Withholding tax amount for spanish legislation
 * @property string $WithholdingTax Withholding tax key for spanish legislation
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
        'PrivateUsePercentage',
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

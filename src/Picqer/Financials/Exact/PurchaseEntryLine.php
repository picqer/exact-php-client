<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=purchaseentryPurchaseEntryLines
 *
 * @property Guid $ID Primary key
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property Guid $Asset Reference to asset
 * @property String $CostCenter Reference to cost center
 * @property String $CostUnit Reference to cost unit
 * @property String $Description Asset description
 * @property Guid $EntryID Reference to header of the purchase entry
 * @property Guid $GLAccount General ledger account
 * @property String $Notes Extra remarks
 * @property Guid $Project Reference to project
 * @property Double $Quantity Quantity
 * @property String $SerialNumber Serial number
 * @property Guid $Subscription Reference to subscription
 * @property Guid $TrackingNumber Reference to tracking number
 * @property Double $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated.
 * @property Double $VATBaseAmountFC VAT base amount in the currency of the transaction
 * @property String $VATCode VAT code
 * @property Double $VATPercentage VAT percentage
 */
class PurchaseEntryLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountFC',
        'Asset',
        'CostCenter',
        'CostUnit',
        'Description',
        'EntryID',
        'GLAccount',
        'Notes',
        'Project',
        'Quantity',
        'SerialNumber',
        'Subscription',
        'TrackingNumber',
        'VATAmountFC',
        'VATBaseAmountFC',
        'VATCode',
        'VATPercentage',
    ];

    protected $url = 'purchaseentry/PurchaseEntryLines';
}

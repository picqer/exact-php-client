<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesentrySalesEntryLines
 *
 * @property Guid $ID Primary key
 * @property Double $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC.
 * @property Double $AmountFC For normal lines it's the amount excluding VAT
 * @property Guid $Asset Reference to Asset
 * @property String $AssetDescription Description of Asset
 * @property String $CostCenter Reference to Cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property String $CostUnit Reference to Cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property String $Description Description. Can be different for header and lines
 * @property Int32 $Division Division code
 * @property Guid $EntryID The unique ID of the entry. Via this ID all transaction lines of a single entry can be retrieved
 * @property Double $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property Double $ExtraDutyPercentage Extra duty percentage for the item
 * @property Guid $GLAccount The GL Account of the invoice line. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property String $GLAccountCode Code of GLAccount
 * @property String $GLAccountDescription Description of GLAccount
 * @property Int32 $LineNumber Indicates the sequence of the lines within one entry
 * @property String $Notes Extra notes
 * @property Guid $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property String $SerialNumber Serial number
 * @property Guid $Subscription When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property String $SubscriptionDescription Description of Subscription
 * @property Guid $TaxSchedule Obsolete
 * @property Guid $TrackingNumber Reference to TrackingNumber
 * @property String $TrackingNumberDescription Description of TrackingNumber
 * @property Int32 $Type Type: 20 = Sales entry, 21 = Sales credit note
 * @property Double $VATAmountDC VAT amount in the default currency of the company
 * @property Double $VATAmountFC VAT amount in the currency of the transaction. Use this property to specify a VAT amount that differs from the VAT amount that is automatically calculated. However if the transaction uses extra duty, extra duty amount also needs to be specified.
 * @property Double $VATBaseAmountDC The VAT base amount in the default currency of the company. This is calculated based on the VATBaseAmountFC
 * @property Double $VATBaseAmountFC The VAT base amount in invoice currency. This is calculated with the use of VAT codes. It's an internal value
 * @property String $VATCode The VAT code used when the invoice was registered
 * @property String $VATCodeDescription Description of VATCode
 * @property Double $VATPercentage The VAT percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used by the default calculation of VAT amounts and VAT base amounts
 */
class SalesEntryLine extends Model
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
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'LineNumber',
        'Notes',
        'Project',
        'ProjectDescription',
        'Quantity',
        'SerialNumber',
        'Subscription',
        'SubscriptionDescription',
        'TaxSchedule',
        'TrackingNumber',
        'TrackingNumberDescription',
        'Type',
        'VATAmountDC',
        'VATAmountFC',
        'VATBaseAmountDC',
        'VATBaseAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
    ];

    protected $url = 'salesentry/SalesEntryLines';

}

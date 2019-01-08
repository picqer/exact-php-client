<?php

namespace Picqer\Financials\Exact;

/**
 * Class VatCode
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=vatVATCodes
 *
 * @property string $ID Primary key
 * @property string $Account Tax account
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property int $CalculationBasis Indicates how to calculate the tax. 0 = based on the gross amount, 1 = based on the gross amount + another tax
 * @property bool $Charged Indicates if transactions using the VAT code are transactions of the domestic VAT charging regulation (such as those for subcontractors) or transactions that are registered within the EU. If Charged=1 and linked to a purchase invoice, both a line for the VAT to pay and a line for the VAT to claim are being created
 * @property string $Code Code of Account
 * @property string $Country Obsolete
 * @property bool $Created Indicates if transactions using the VAT code are transactions of the domestic VAT charging regulation (such as those for subcontractors) or transactions that are registered within the EU. If Charged=1 and linked to a purchase invoice, both a line for the VAT to pay and a line for the VAT to claim are being created
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the VAT code
 * @property int $Division Division code
 * @property string $EUSalesListing Indicates if and how transactions using the VAT code appear on the ICT return (EU sales list). L = Listing goods, N = No listing, S = Listing services, T = Triangulation
 * @property string $GLDiscountPurchase Indicates the purchase discount GL account linked to the VAT codes for German legislation
 * @property string $GLDiscountPurchaseCode Code of GLDiscountPurchase
 * @property string $GLDiscountPurchaseDescription Description of GLDiscountPurchase
 * @property string $GLDiscountSales Indicates the sales discount GL account linked to the VAT codes for German legislation
 * @property string $GLDiscountSalesCode Code of GLDiscountSales
 * @property string $GLDiscountSalesDescription Description of GLDiscountSales
 * @property string $GLToClaim G/L account that is used to book the VAT to claim. If you enter purchases with a VAT code, the VAT amount to be claimed is entered to this VAT account. Must be of type VAT
 * @property string $GLToClaimCode Code of GLToClaim
 * @property string $GLToClaimDescription Description of GLToClaim
 * @property string $GLToPay G/L account that is used to book the VAT to pay. If you enter sales with a VAT code, the VAT amount to be paid is entered to this VAT account. Must be of type VAT
 * @property string $GLToPayCode Code of GLToPay
 * @property string $GLToPayDescription Description of GLToPay
 * @property bool $IntraStat Indicates if intrastat is used
 * @property bool $IsBlocked Indicates if the VAT code may still be used
 * @property string $LegalText Legal description for VAT code to print in the total block of the invoice
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName User name of modifier
 * @property float $Percentage Percentage of the VAT code
 * @property int $TaxReturnType Indicates what type of Taxcode it is: can be VAT, IncomeTax
 * @property string $Type G/L account that is used to book the VAT to claim. If you enter purchases with a VAT code, the VAT amount to be claimed is entered to this VAT account. Must be of type VAT
 * @property string $VatDocType Field in VAT code maintenance to calculate different VATs depending on the selected document type. P = purchase invoice, F = freelance invoice, E = expense voucher. The field is valid for witholding tax type
 * @property int $VatMargin The VAT margin scheme is used for the trade of secondhand goods which are purchased without VAT (for example when a company buys a secondhand good from a private person). In the VAT margin scheme, the VAT is not calculated based on the sales price. Instead of that, the VAT is calculated based on the margin (gross sales price minus the gross purchase price)
 * @property int $VATPartialRatio Partial ratio explains which part of the VAT the company has to pay. Used in some branches where the sellers have a bad reputation, so the buyers have to take over the VAT-liability
 * @property VATPercentages $VATPercentages VAT percentages. You can have several VAT percentages, with start and end dates
 * @property string $VATTransactionType Indicates the type of transactions for which the VAT code may be used. B = Both, P = Purchase, S = Sales
 */
class VatCode extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'CalculationBasis',
        'Charged',
        'Code',
        'Country',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EUSalesListing',
        'GLDiscountPurchase',
        'GLDiscountPurchaseCode',
        'GLDiscountPurchaseDescription',
        'GLDiscountSales',
        'GLDiscountSalesCode',
        'GLDiscountSalesDescription',
        'GLToClaim',
        'GLToClaimCode',
        'GLToClaimDescription',
        'GLToPay',
        'GLToPayCode',
        'GLToPayDescription',
        'IntraStat',
        'IsBlocked',
        'LegalText',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Percentage',
        'TaxReturnType',
        'Type',
        'VatDocType',
        'VatMargin',
        'VATPartialRatio',
        'VATPercentages',
        'VATTransactionType',
    ];

    protected $url = 'vat/VATCodes';
}

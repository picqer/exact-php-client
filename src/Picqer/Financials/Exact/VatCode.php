<?php namespace Picqer\Financials\Exact;

/**
 * Class VatCode
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=vatVATCodes
 *
 * @property Guid $ID Primary key
 * @property Guid $Account Tax account
 * @property String $AccountCode Code of Account
 * @property String $AccountName Name of Account
 * @property Byte $CalculationBasis Indicates how to calculate the tax. 0 = based on the gross amount, 1 = based on the gross amount + another tax
 * @property Boolean $Charged Indicates if transactions using the VAT code are transactions of the domestic VAT charging regulation (such as those for subcontractors) or transactions that are registered within the EU. If Charged=1 and linked to a purchase invoice, both a line for the VAT to pay and a line for the VAT to claim are being created
 * @property String $Code Code of Account
 * @property String $Country Obsolete
 * @property Boolean $Created Indicates if transactions using the VAT code are transactions of the domestic VAT charging regulation (such as those for subcontractors) or transactions that are registered within the EU. If Charged=1 and linked to a purchase invoice, both a line for the VAT to pay and a line for the VAT to claim are being created
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the VAT code
 * @property Int32 $Division Division code
 * @property String $EUSalesListing Indicates if and how transactions using the VAT code appear on the ICT return (EU sales list). L = Listing goods, N = No listing, S = Listing services, T = Triangulation
 * @property Guid $GLDiscountPurchase Indicates the purchase discount GL account linked to the VAT codes for German legislation
 * @property String $GLDiscountPurchaseCode Code of GLDiscountPurchase
 * @property String $GLDiscountPurchaseDescription Description of GLDiscountPurchase
 * @property Guid $GLDiscountSales Indicates the sales discount GL account linked to the VAT codes for German legislation
 * @property String $GLDiscountSalesCode Code of GLDiscountSales
 * @property String $GLDiscountSalesDescription Description of GLDiscountSales
 * @property Guid $GLToClaim G/L account that is used to book the VAT to claim. If you enter purchases with a VAT code, the VAT amount to be claimed is entered to this VAT account. Must be of type VAT
 * @property String $GLToClaimCode Code of GLToClaim
 * @property String $GLToClaimDescription Description of GLToClaim
 * @property Guid $GLToPay G/L account that is used to book the VAT to pay. If you enter sales with a VAT code, the VAT amount to be paid is entered to this VAT account. Must be of type VAT
 * @property String $GLToPayCode Code of GLToPay
 * @property String $GLToPayDescription Description of GLToPay
 * @property Boolean $IntraStat Indicates if intrastat is used
 * @property Boolean $IsBlocked Indicates if the VAT code may still be used
 * @property String $LegalText Legal description for VAT code to print in the total block of the invoice
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName User name of modifier
 * @property Double $Percentage Percentage of the VAT code
 * @property Int16 $TaxReturnType Indicates what type of Taxcode it is: can be VAT, IncomeTax
 * @property Guid $Type G/L account that is used to book the VAT to claim. If you enter purchases with a VAT code, the VAT amount to be claimed is entered to this VAT account. Must be of type VAT
 * @property String $VatDocType Field in VAT code maintenance to calculate different VATs depending on the selected document type. P = purchase invoice, F = freelance invoice, E = expense voucher. The field is valid for witholding tax type
 * @property Byte $VatMargin The VAT margin scheme is used for the trade of secondhand goods which are purchased without VAT (for example when a company buys a secondhand good from a private person). In the VAT margin scheme, the VAT is not calculated based on the sales price. Instead of that, the VAT is calculated based on the margin (gross sales price minus the gross purchase price)
 * @property Int16 $VATPartialRatio Partial ratio explains which part of the VAT the company has to pay. Used in some branches where the sellers have a bad reputation, so the buyers have to take over the VAT-liability
 * @property VATPercentages $VATPercentages VAT percentages. You can have several VAT percentages, with start and end dates
 * @property String $VATTransactionType Indicates the type of transactions for which the VAT code may be used. B = Both, P = Purchase, S = Sales
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
        'VATTransactionType'
    ];

    protected $url = 'vat/VATCodes';

}

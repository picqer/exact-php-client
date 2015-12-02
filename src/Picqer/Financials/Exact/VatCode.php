<?php namespace Picqer\Financials\Exact;

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

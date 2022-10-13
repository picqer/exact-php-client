<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesInvoiceOrderChargeLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesInvoiceOrderChargeLines
 *
 * @property string $ID Line ID of shipping method or order charges
 * @property float $AmountDC Amount excluded VAT in reporting currency for shipping cost or order charges
 * @property float $AmountFCExclVAT Amount excluded VAT in trading currency for shipping cost or order charges
 * @property float $AmountFCInclVAT Amount included VAT in trading currency for shipping cost or order charges
 * @property float $AmountVATFC VAT amount in trading currency for shipping cost or order charges
 * @property int $Division Division code
 * @property string $GLAccount The GL Account of the sales invoice order charge line. This field is mandatory. This field is set based on the order charge master
 * @property string $GLAccountCode GL account code of shipping cost or order charges
 * @property string $GLAccountDescription GL account description of shipping cost or order charges
 * @property string $InvoiceID The InvoiceID identifies the sales invoice. All the lines of a sales invoice have the same InvoiceID
 * @property bool $IsShippingCost Indicates whether the order charge line is shipping cost
 * @property int $LineNumber Line number of shipping cost and order charges
 * @property string $OrderCharge ID of order charges is mandatory for order charge. However, it is not required for shipping cost
 * @property string $OrderChargeCode Code of shipping method or order charges
 * @property string $OrderChargeDescription Description from shipping method or order charges master
 * @property string $OrderChargesLineDescription Line description of shipping cost or order charges (only available in WD Premium packages)
 * @property string $VATCode VAT code that is used for shipping cost or order charges based on master
 * @property string $VATDescription VAT description for shipping cost or order charges
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesInvoiceOrderChargeLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFCExclVAT',
        'AmountFCInclVAT',
        'AmountVATFC',
        'Division',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'InvoiceID',
        'IsShippingCost',
        'LineNumber',
        'OrderCharge',
        'OrderChargeCode',
        'OrderChargeDescription',
        'OrderChargesLineDescription',
        'VATCode',
        'VATDescription',
        'VATPercentage',
    ];

    protected $url = 'salesinvoice/SalesInvoiceOrderChargeLines';
}

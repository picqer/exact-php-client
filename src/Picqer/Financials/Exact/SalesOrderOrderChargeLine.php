<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderOrderChargeLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrderOrderChargeLines
 *
 * @property string $ID Line ID of shipping method or order charges
 * @property float $AmountDC Amount excluded VAT in reporting currency for shipping cost or order charges
 * @property float $AmountFCExclVAT Amount excluded VAT in trading currency for shipping cost or order charges
 * @property float $AmountFCInclVAT Amount included VAT in trading currency for shipping cost or order charges
 * @property float $AmountVATFC VAT amount in trading currency for shipping cost or order charges
 * @property int $Division Division code
 * @property bool $IsShippingCost Indicates whether the order charge line is shipping cost
 * @property int $LineNumber Line number of shipping cost and order charges
 * @property string $OrderCharge ID of order charges is mandatory for order charge. However, it is not required for shipping cost
 * @property string $OrderChargeCode Code of shipping method or order charges
 * @property string $OrderChargeDescription Description from shipping method or order charges master
 * @property string $OrderChargesLineDescription Line description of shipping cost or order charges (only available in WD Premium packages)
 * @property string $OrderID The OrderID identifies the sales order. All the lines of a sales order have the same OrderID
 * @property string $VATCode VAT code that is used for shipping cost or order charges based on master
 * @property string $VATDescription VAT description for shipping cost or order charges
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesOrderOrderChargeLine extends Model
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
        'IsShippingCost',
        'LineNumber',
        'OrderCharge',
        'OrderChargeCode',
        'OrderChargeDescription',
        'OrderChargesLineDescription',
        'OrderID',
        'VATCode',
        'VATDescription',
        'VATPercentage',
    ];

    protected $url = 'salesorder/SalesOrderOrderChargeLines';
}

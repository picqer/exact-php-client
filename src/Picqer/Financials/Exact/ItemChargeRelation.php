<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemChargeRelation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemChargeRelation
 *
 * @property string $ID Primary key of relationship between item and item charge
 * @property float $Amount Item charge amount per unit
 * @property string $ChargeCode Code of item charge
 * @property string $ChargeDescription Description of item charge
 * @property string $ChargeID Item charge ID
 * @property string $ChargeVATCode VAT code that is used when the item charge is registered
 * @property string $ChargeVATDescription Description of VAT Code
 * @property float $ChargeVATPercentage VAT percentage of the VAT code
 * @property string $ChargeVATType Indicates how the VAT amount should be calculated in relation to the item charge amount. B = VAT 0% (Only base amount), E = Excluding, I = Including, N = No VAT
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency of the item charge
 * @property int $Division Division code
 * @property string $ItemCode Code of item
 * @property string $ItemDescription Description of item
 * @property string $ItemID Item ID
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $Quantity Quantity of the item charge requires in the item
 * @property float $TotalAmount Total of item charge amount per unit x quantity
 */
class ItemChargeRelation extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Amount',
        'ChargeCode',
        'ChargeDescription',
        'ChargeID',
        'ChargeVATCode',
        'ChargeVATDescription',
        'ChargeVATPercentage',
        'ChargeVATType',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Division',
        'ItemCode',
        'ItemDescription',
        'ItemID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Quantity',
        'TotalAmount',
    ];

    protected $url = 'logistics/ItemChargeRelation';
}

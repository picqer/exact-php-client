<?php

namespace Picqer\Financials\Exact;

/**
 * Class PaymentCondition.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowPaymentConditions
 *
 * @property string $ID Primary key
 * @property string $Code Code of the payment condition
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CreditManagementScenario Default credit management scenario to be used for new payment terms
 * @property string $CreditManagementScenarioCode Code of CreditManagementScenario
 * @property string $CreditManagementScenarioDescription Description of CreditManagementScenario
 * @property string $Description Description of the payment condition
 * @property string $DiscountCalculation Indicates how the discount amount is calculated. Values: E = Excluding VAT, I = Including VAT
 * @property int $DiscountPaymentDays Number of days to pay within, to have the right to take the discount
 * @property float $DiscountPercentage Discount percentage
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $PaymentDays Number of days to be included in the due date calculation. Example: invoice date = 17/01 PaymentEndOfMonths = 2 => 31/03 PaymentDays = 15 => 15/04
 * @property string $PaymentDiscountType Type of payment discount. Values: B = Settlement discount, K = Credit surcharge
 * @property int $PaymentEndOfMonths Number of month endings to be included in the due date calculation
 * @property string $PaymentMethod Method of payment. Values: B = On credit, I = Collection, K = Cash
 * @property float $Percentage Percentage (stored as fraction) of total invoice amount
 * @property string $VATCalculation Indicates how the VAT amount is calculated Values: E = Excluding discount, I = Including discount
 */
class PaymentCondition extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'CreditManagementScenario',
        'CreditManagementScenarioCode',
        'CreditManagementScenarioDescription',
        'Description',
        'DiscountCalculation',
        'DiscountPaymentDays',
        'DiscountPercentage',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentDays',
        'PaymentDiscountType',
        'PaymentEndOfMonths',
        'PaymentMethod',
        'Percentage',
        'VATCalculation',
    ];

    protected $url = 'cashflow/PaymentConditions';
}

<?php

namespace Picqer\Financials\Exact;

/**
 * Class PaymentCondition
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=cashflowPaymentConditions
 *
 * @property Guid $ID Primary key
 * @property String $Code Code of the payment condition
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Guid $CreditManagementScenario Default credit management scenario to be used for new payment terms
 * @property String $CreditManagementScenarioCode Code of CreditManagementScenario
 * @property String $CreditManagementScenarioDescription Description of CreditManagementScenario
 * @property String $Description Description of CreditManagementScenario
 * @property String $DiscountCalculation Indicates how the discount amount is calculated. Values: E = Excluding VAT, I = Including VAT
 * @property Int32 $DiscountPaymentDays Number of days to pay within, to have the right to take the discount
 * @property Double $DiscountPercentage Discount percentage
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int32 $PaymentDays Number of days to pay within, to have the right to take the discount
 * @property String $PaymentDiscountType Type of payment discount. Values: B = Settlement discount, K = Credit surcharge
 * @property Int32 $PaymentEndOfMonths Number of days to be included in the due date calculation. Example: invoice date = 17/01 PaymentEndOfMonths = 2 => 31/03 PaymentDays = 15 => 15/04
 * @property String $PaymentMethod Method of payment. Values: B = On credit, I = Collection, K = Cash
 * @property Double $Percentage Discount percentage
 * @property String $VATCalculation Indicates how the VAT amount is calculated Values: E = Excluding discount, I = Including discount
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

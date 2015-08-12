<?php namespace Picqer\Financials\Exact;

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
        'VATCalculation'
    ];

    protected $url = 'cashflow/PaymentConditions';

}

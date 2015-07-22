<?php namespace Picqer\Financials\Exact;

class PaymentCondition extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'PaymentDays'
    ];

    protected $url = 'cashflow/PaymentConditions';

}

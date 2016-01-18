<?php namespace Picqer\Financials\Exact;

class Subscriptions extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'BlockEntry',
        'CancellationDate',
        'Classification',
        'ClassificationCode',
        'ClassificationDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomerPONumber',
        'Description',
        'Division',
        'EndDate',
        'InvoicedTo',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'InvoicingStartDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Number',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'PaymentCondition',
        'PaymentConditionDescription',
        'Printed',
        'ReasonCancelled',
        'ReasonCancelledCode',
        'ReasonCancelledDescription',
        'StartDate',
        'SubscriptionLines',
        'SubscriptionRestrictionEmployees',
        'SubscriptionRestrictionItems',
        'SubscriptionType',
        'SubscriptionTypeCode',
        'SubscriptionTypeDescription',
    ];

    protected $url = 'subscription/Subscriptions';
}

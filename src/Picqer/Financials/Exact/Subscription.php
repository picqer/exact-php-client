<?php

namespace Picqer\Financials\Exact;

/**
 * Class Subscription.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptions
 *
 * @property string $EntryID Primary key
 * @property bool $BlockEntry Indicates if subscription is blocked for time cost entry
 * @property string $CancellationDate Date of cancellation
 * @property string $Classification Guid ID of classification, to filter the report based on the classification of a subscription
 * @property string $ClassificationCode Code of classification, to filter the report based on the classification of a subscription
 * @property string $ClassificationDescription Description of classification, to filter the report based on the classification of a subscription
 * @property string $Created Date when the subscription was created
 * @property string $Creator The Guid ID of the user that created the subscription
 * @property string $CreatorFullName The full name of the user that created the subscription
 * @property string $Currency Currency code used in the transactions
 * @property string $CustomerPONumber Purchase order number of that is linked to customer
 * @property string $Description Description of the subscription
 * @property int $Division Division number of the company that the subscription is linked to
 * @property string $EndDate The date and time when the subscription ends
 * @property int $InvoiceDay For monthly, quaterly, half-year and yearly invoice period, the day number of the month when the invoice of the subscription is sent. While for weekly invoice period, the weekday number of the week when the invoice of the subscription is sent: 0=Monday 1=Tuesday 2=Wednesday 3=Thursday 4=Friday 5=Saturday 6=Sunday
 * @property string $InvoicedTo The date when the invoice of the subscription is sent
 * @property string $InvoiceTo The account which the subsciption is invoiced to
 * @property string $InvoiceToContactPerson The ID of the contact person that is linked to the account the subscription is invoice to
 * @property string $InvoiceToContactPersonFullName The name of the contact person that is linked to the account the subscription is invoice to
 * @property string $InvoiceToName Name of the account to invoice to
 * @property string $InvoicingStartDate Date to start invoicing the account
 * @property string $Modified Date and time when the subscription has been modified
 * @property string $Modifier The ID of the user that modified the subscription
 * @property string $ModifierFullName The name of the user that modified the subscription
 * @property string $Notes For additional information regarding the subscription
 * @property int $Number Subscription number of the company
 * @property string $OrderedBy Reference to order account, GUID ID of the subscriber
 * @property string $OrderedByContactPerson Reference of contact person of order account, displays the contact name of the subscriber
 * @property string $OrderedByContactPersonFullName Name of contact person of order account, displays the full contact name of the subscriber
 * @property string $OrderedByName Name of order account, displays the name of the subscriber
 * @property string $PaymentCondition Code of subscriptions payment condition
 * @property string $PaymentConditionDescription Description of subscriptions payment condition
 * @property bool $Printed Indicates if subscription has been printed
 * @property string $Project The Guid ID of the project, reference to Project endpoint
 * @property string $ReasonCancelled Guid ID of the reason of cancellation record linked to the subscription
 * @property string $ReasonCancelledCode Code of the reason of cancellation record linked to the subscription
 * @property string $ReasonCancelledDescription Description of the reason of cancellation record linked to the subscription
 * @property string $StartDate Start date of the subscription
 * @property SubscriptionLine[] $SubscriptionLines Collection of subscription lines linked to the subscription link, can be referenced to SubscriptionLines endpoint
 * @property SubscriptionRestrictionEmployee[] $SubscriptionRestrictionEmployees Collection of employee's restriction, can be referenced to SubscriptionRestrictionEmployees endpoint
 * @property SubscriptionRestrictionItem[] $SubscriptionRestrictionItems Collection of restriction items linked to the subscription, can be referenced to SubscriptionRestrictionItems endpoint
 * @property string $SubscriptionType The GUID ID of the subscription condition, reference to SubscriptionType endpoint
 * @property string $SubscriptionTypeCode The code of the subscription condition record
 * @property string $SubscriptionTypeDescription The code of the subscription condition description
 */
class Subscription extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $fillable = [
        'EntryID',
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
        'InvoiceDay',
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
        'Project',
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

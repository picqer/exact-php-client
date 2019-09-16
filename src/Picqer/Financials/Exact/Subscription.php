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
 * @property string $Classification Reference to Classification
 * @property string $ClassificationCode Code of Classification
 * @property string $ClassificationDescription Description of Classification
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency code
 * @property string $CustomerPONumber Purchase order number of customer
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $EndDate End date
 * @property int $InvoiceDay Invoice Day
 * @property string $InvoicedTo Invoice date
 * @property string $InvoiceTo Reference to invoice account
 * @property string $InvoiceToContactPerson Reference to contact person of invoice account
 * @property string $InvoiceToContactPersonFullName Name of contact person of invoice account
 * @property string $InvoiceToName Name of invoice account
 * @property string $InvoicingStartDate Invoicing start date
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Remarks
 * @property int $Number Number
 * @property string $OrderedBy Reference to order account
 * @property string $OrderedByContactPerson Reference of contact person of order account
 * @property string $OrderedByContactPersonFullName Name of contact person of order account
 * @property string $OrderedByName Name of order account
 * @property string $PaymentCondition Payment condition
 * @property string $PaymentConditionDescription Description of PaymentCondition
 * @property bool $Printed Indicates if subscription is printed
 * @property string $ReasonCancelled Reference to reason cancelled
 * @property string $ReasonCancelledCode Code of ReasonCancelled
 * @property string $ReasonCancelledDescription Description of ReasonCancelled
 * @property string $StartDate Start date
 * @property SubscriptionLines $SubscriptionLines Collection of subscription lines
 * @property SubscriptionRestrictionEmployees $SubscriptionRestrictionEmployees Collection of restriction employees
 * @property SubscriptionRestrictionItems $SubscriptionRestrictionItems Collection of restriction items
 * @property string $SubscriptionType Reference to subscription type
 * @property string $SubscriptionTypeCode Code of SubscriptionType
 * @property string $SubscriptionTypeDescription Description of SubscriptionType
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

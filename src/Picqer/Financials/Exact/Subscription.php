<?php

namespace Picqer\Financials\Exact;

/**
 * Class Subscription
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=subscriptionSubscriptions
 *
 * @property Guid $EntryID ID of the entry, Primary key
 * @property Boolean $BlockEntry Indicates if subscription is blocked for time cost entry
 * @property DateTime $CancellationDate Date of cancellation
 * @property Guid $Classification Reference to Classification
 * @property String $ClassificationCode Code of Classification
 * @property String $ClassificationDescription Description of Classification
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency code
 * @property String $CustomerPONumber Purchase order number of customer
 * @property String $Description Description of Classification
 * @property Int32 $Division Division code
 * @property DateTime $EndDate End date
 * @property DateTime $InvoicedTo Invoice date
 * @property Guid $InvoiceTo Reference to invoice account
 * @property Guid $InvoiceToContactPerson Reference to contact person of invoice account
 * @property String $InvoiceToContactPersonFullName Name of contact person of invoice account
 * @property String $InvoiceToName Name of invoice account
 * @property DateTime $InvoicingStartDate Invoicing start date
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Remarks
 * @property String $Number Purchase order number of customer
 * @property Guid $OrderedBy Reference to order account
 * @property Guid $OrderedByContactPerson Reference of contact person of order account
 * @property String $OrderedByContactPersonFullName Name of contact person of order account
 * @property String $OrderedByName Name of order account
 * @property String $PaymentCondition Payment condition
 * @property String $PaymentConditionDescription Description of PaymentCondition
 * @property Boolean $Printed Indicates if subscription is printed
 * @property Guid $ReasonCancelled Reference to reason cancelled
 * @property String $ReasonCancelledCode Code of ReasonCancelled
 * @property String $ReasonCancelledDescription Description of ReasonCancelled
 * @property DateTime $StartDate Invoicing start date
 * @property SubscriptionLines $SubscriptionLines Collection of subscription lines
 * @property SubscriptionRestrictionEmployees $SubscriptionRestrictionEmployees Collection of restriction employees
 * @property SubscriptionRestrictionItems $SubscriptionRestrictionItems Collection of restriction items
 * @property Guid $SubscriptionType Reference to subscription type
 * @property String $SubscriptionTypeCode Code of SubscriptionType
 * @property String $SubscriptionTypeDescription Description of SubscriptionType
 */
class Subscription extends Model
{
    use Query\Findable;
    use Persistance\Storable;
    
    protected $primaryKey = 'EntryID';

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
        'EntryID',
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